<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Node;
use App\SearchParameters;
use App\Http\Controllers\Controller;
use App\MyNode;
use App\MyLinkedList;
use Illuminate\Support\Facades\DB;

class SearchParametersController extends Controller
{
	public function getSearchParametersByEmail(Request $request)
    {
    	$userEmail = trim($request->input("userEmail"));
        return SearchParameters::where("user_email",$userEmail)->get();
    }
    /**
    *This method is responsible for create the four routes to be show at the final user
    */
    public function searchRoutes(Request $request)
    {
        //It is obtained the search parameters supplyed by the user
        $startPoint = trim($request->input("slStartPoint"));
        $distanceSelected = trim($request->input("slMaxDistance"));
        $durationSelected = trim($request->input("slMaxDuration"));
        $typeActivitySelected = trim($request->input("slTypeActivity"));
        $costSelected = trim($request->input("slAverageCost"));

        $class = $this->ClassifySearchParameters($distanceSelected, $durationSelected, $typeActivitySelected, $costSelected);

        $newParameter=new SearchParameters();
        $newParameter->timestamps = false;
        $newParameter->max_distance=$distanceSelected;
        $newParameter->max_duration=$durationSelected;
        $newParameter->average_cost=$costSelected;
        $newParameter->type_activity=$typeActivitySelected;
        $newParameter->class=$class;
        $newParameter->user_email="sofisofi@outlook.com";

        $newParameter->save();

        //It is created the variables to be used in the code
        $latitude=0;
        $longitude=0;
        $myLinkedList = new MyLinkedList();
        $nodesForRoutesList = new MyLinkedList();
        $orderedNodes = new MyLinkedList();
        $northwestRoute = array();
        $northeastRoute = array();
        $southwestRoute = array();
        $southeastRoute = array();

        //It is obtained the latitude and longitude of the startpoint

        //In case that the user wants to use the current position as startpoint
        if($startPoint!="UCR Turrialba" && $startPoint!="San Antonio" && $startPoint!="Jabillos")
        {
            $kesy = preg_split("/[\s,]+/", $startPoint);
            $latitude=$kesy[0];
            $longitude=$kesy[1];
        }
        //In case that he/she select another startpoint in the list
        else
        {
            $tableRegister = DB::table('start_points')->get();

            foreach ($tableRegister as $tableRegister)
            {
                 if(trim($tableRegister->name)==$startPoint)
                 {
                    $latitude=$tableRegister->latitude;
                    $longitude=$tableRegister->longitude;
                 }
            }
        }
        // It is obtained all nodes contained in the database
        $nodes = Node::all();

        //The first filtering is performed. Corresponding to the distance filtering of the starting point.

        foreach ($nodes as $nodes)
        {
            $distance = $this->harvestine($latitude, $longitude, $nodes->latitude, $nodes->longitude);

            $duration =($distance/24)*60;

            if($distance<=$distanceSelected && $duration<=$durationSelected)
            {
                $myLinkedList->orderedInsert($distance, $nodes);
            }
        }
        //The second filtering is performed. Corresponding to the Euclides filtering of the search parameters.

        for($i=0; $i<$myLinkedList->size(); $i++)
        {
            $myNode = $myLinkedList->getNode($i);

            $cost=0;

            if($myNode->node->value=="Bajo"){
                $cost=1;
            }elseif ($myNode->node->value=="Medio") {
                $cost=2;
            }else{
                $cost=3;
            }

            $newNodeDistance = sqrt(pow(($distanceSelected-$myNode->distance), 2)+pow(($durationSelected-(($myNode->distance)/24)*60), 2)+pow(($typeActivitySelected-$myNode->node->idtypeactivities), 2)+pow(($costSelected-$cost), 2));

            $nodesForRoutesList->orderedInsert($newNodeDistance, $myNode->node);

        }

        //The number of nodes in the list is reduced.
        $nodesForRoutesList->cut(20);

        //Nodes in the list are sorted according to distance from the starting point.
        for($i=0; $i<$nodesForRoutesList->size(); $i++)
        {
            $myNode = $nodesForRoutesList->getNode($i);

            $distance = $this->harvestine($latitude, $longitude, $myNode->node->latitude, $myNode->node->longitude);

            $orderedNodes->orderedInsert($distance, $myNode->node);

        }
        //The nodes are finally divided among the four routes that will be presented to the user.
        for($i=0; $i<$orderedNodes->size(); $i++)
        {
            if($orderedNodes->getNode($i)->node->latitude<=$latitude && $orderedNodes->getNode($i)->node->longitude>=$longitude)
            {
                array_push($northwestRoute, $orderedNodes->getNode($i)->node);
            }
            elseif($orderedNodes->getNode($i)->node->latitude<$latitude && $orderedNodes->getNode($i)->node->longitude<$longitude)
            {
                array_push($southwestRoute, $orderedNodes->getNode($i)->node);
            }
            elseif($orderedNodes->getNode($i)->node->latitude>$latitude && $orderedNodes->getNode($i)->node->longitude>$longitude)
            {
                array_push($northeastRoute, $orderedNodes->getNode($i)->node);
            }
            else
                {
                    array_push($southeastRoute, $orderedNodes->getNode($i)->node);
                }
        }
        return view('map-route')->with('northwestRoute', json_encode($northwestRoute))->with('southwestRoute', json_encode($southwestRoute))->with('northeastRoute', json_encode($northeastRoute))->with('southeastRoute', json_encode($southeastRoute))->with('latitude', $latitude)->with('longitude', $longitude);
    }//Fin del método

    /*
    * This method classifies the search parameters entered by the user, using the Bayesian classification method.
    */
    public function ClassifySearchParameters($distance, $duration, $typeActivity, $averageCost)
    {
        $class = "";
        $isItClassified=false;

        //The image constructed so far is checked to determine if the parameters have already been classified.

        //The database is queried in the searchparameters table
        $tableRegister = DB::table('searchparameters')->get();

        foreach ($tableRegister as $tableRegister)
        {
            if(trim($tableRegister->max_distance)==$distance && trim($tableRegister->max_duration)==$duration && trim($tableRegister->type_activity)==$typeActivity && trim($tableRegister->average_cost)==$averageCost)
            {
                $class = $tableRegister->class;
                $isItClassified=true;
                break;
            }
        }
        //Comprovate that the supplied parameters have not been classified.
        if(!$isItClassified)
        {
            //Variables to determinate the probability of the attributes

            $nC1=0; //Num of the registers that already exits for the C1 Class.
            $nC2=0; 
            $nC3=0; 

            $ncDistanceC1=0; //Num of the registers that already exists for the distance supplied by the user in the class C1
            $ncDistanceC2=0;
            $ncDistanceC3=0;
            $ncDurationC1=0;
            $ncDurationC2=0; 
            $ncDurationC3=0;
            $ncAverageCostC1=0;
            $ncAverageCostC2=0; 
            $ncAverageCostC3=0;
            $ncTypeActivityC1=0;
            $ncTypeActivityC2=0; 
            $ncTypeActivityC3=0;

            // In this variables is stored the probability for each attribute in each class.
            $distanceInC1=0;
            $distanceInC2=0;
            $distanceInC3=0;
            $durationInC1=0;
            $durationInC2=0;
            $durationInC3=0;
            $averageCostInC1=0;
            $averageCostInC2=0;
            $averageCostInC3=0;
            $typeActivityInC1=0;
            $typeActivityInC2=0;
            $typeActivityInC3=0;

            //The database is queried in the searchparameters table
            $registrosTabla = DB::table('searchparameters')->get();

            // It compares the data provided in the form with the records of the database
            foreach ($registrosTabla as $registrosTabla) {

                //It adds up how many records there are for each attribute in the C1 class.
                if(trim($registrosTabla->class)=="C1")
                {
                    $nC1+=1;

                    if(trim($registrosTabla->max_distance)==$distance){

                        $ncDistanceC1+=1;
                    }
                    if(trim($registrosTabla->max_duration)==$duration){

                        $ncDurationC1+=1;
                    }
                    if(trim($registrosTabla->type_activity)==$typeActivity){

                        $ncTypeActivityC1+=1;
                    }
                    if(trim($registrosTabla->average_cost)==$averageCost){

                        $ncAverageCostC1+=1;
                    }
                }
                //It adds up how many records there are for each attribute in the C2 class.
                elseif(trim($registrosTabla->class)=="C2")
                {
                    $nC1+=1;

                    if(trim($registrosTabla->max_distance)==$distance){

                        $ncDistanceC2+=1;
                    }
                    if(trim($registrosTabla->max_duration)==$duration){

                        $ncDurationC2+=1;
                    }
                    if(trim($registrosTabla->type_activity)==$typeActivity){

                        $ncTypeActivityC2+=1;
                    }
                    if(trim($registrosTabla->average_cost)==$averageCost){

                        $ncAverageCostC2+=1;
                    }
                }
                else
                {
                    $nC3+=1;

                    if(trim($registrosTabla->max_distance)==$distance){

                        $ncDistanceC3+=1;
                    }
                    if(trim($registrosTabla->max_duration)==$duration){

                        $ncDurationC3+=1;
                    }
                    if(trim($registrosTabla->type_activity)==$typeActivity){

                        $ncTypeActivityC3+=1;
                    }
                    if(trim($registrosTabla->average_cost)==$averageCost){

                        $ncAverageCostC3+=1;
                    }
                }
            }

            //Calculate the probabilities for each attribute in each class
            $distanceInC1 = (($ncDistanceC1+1)/($nC1+4));
            $distanceInC2 = (($ncDistanceC2+1)/($nC2+4));
            $distanceInC3 = (($ncDistanceC3+1)/($nC3+4));

            $durationInC1 = (($ncDurationC1+1)/($nC1+4));
            $durationInC2 = (($ncDurationC2+1)/($nC2+4));
            $durationInC3 = (($ncDurationC3+1)/($nC3+4));

            $averageCostInC1 = (($ncAverageCostC1+1)/($nC1+4));
            $averageCostInC2 = (($ncAverageCostC2+1)/($nC2+4));
            $averageCostInC3 = (($ncAverageCostC3+1)/($nC3+4));

            $typeActivityInC1 = (($ncTypeActivityC1+1)/($nC1+4));
            $typeActivityInC2 = (($ncTypeActivityC2+1)/($nC2+4));
            $typeActivityInC3 = (($ncTypeActivityC3+1)/($nC3+4));

            //Multiply the odds for each class.
            $probabilityC1 = $distanceInC1*$durationInC1*$averageCostInC1*$typeActivityInC1;
            $probabilityC2 = $distanceInC2*$durationInC2*$averageCostInC2*$typeActivityInC2;
            $probabilityC3 = $distanceInC3*$durationInC3*$averageCostInC3*$typeActivityInC3;

             // Each result is multiplied by the corresponding P (vj)
            //It is multiplied by 1000000 to avoid problems with very small numbers.
            $pp = round(($probabilityC1*($nC1/($nC1+$nC2+$nC3)))*1000000,8);
            $tt = round(($probabilityC2*($nC2/($nC1+$nC2+$nC3)))*1000000,8);
            $aa = round(($probabilityC3*($nC3/($nC1+$nC2+$nC3)))*1000000,8);

            if($pp>$tt && $pp>$aa)
            {
                $class="C1";

            }elseif($tt>$pp && $tt>$aa)
            {
                $class="C2";
            }else{

                $class="C3";
            }
        }
        return $class;
    }

    function harvestine($lat1, $long1, $lat2, $long2){ 
        //Solo aplicable a la tierra, es decir es una constante que cambiaria en la luna, marte... etc.
        $km = 111.302;
        
        //1 Grado = 0.01745329 Radianes    
        $degtorad = 0.01745329;
        
        //1 Radian = 57.29577951 Grados
        $radtodeg = 57.29577951; 
        //La formula que calcula la distancia en grados en una esfera, llamada formula de Harvestine.
        $dlong = ($long1 - $long2); 
        $dvalue = (sin($lat1 * $degtorad) * sin($lat2 * $degtorad)) + (cos($lat1 * $degtorad) * cos($lat2 * $degtorad) * cos($dlong * $degtorad)); 
        $dd = acos($dvalue) * $radtodeg; 
        return round(($dd * $km), 2);
    }
}
