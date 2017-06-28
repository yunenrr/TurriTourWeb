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
        $duratiosSelected = trim($request->input("slMaxDuration"));
        $typeActivitySelected = trim($request->input("slStartPoint"));
        $costSelected = trim($request->input("slCost"));

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

            if($distance<=$distanceSelected && $duration<=$duratiosSelected)
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

            $newNodeDistance = sqrt(pow(($distanceSelected-$myNode->distance), 2)+pow(($duratiosSelected-(($myNode->distance)/24)*60), 2)+pow(($typeActivitySelected-$myNode->node->idtypeactivities), 2)+pow(($costSelected-$cost), 2));

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
        return view('map-route')->with('northwestRoute', json_encode($northwestRoute))->with('southwestRoute', json_encode($southwestRoute))->with('northeastRoute', json_encode($northeastRoute))->with('southeastRoute', json_encode($southeastRoute))->with('latitude',$latitude)->with('longitude',$longitude);

    }//Fin del método

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
