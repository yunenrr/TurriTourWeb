<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Node;

class MyNode
{
    var $distance;
    var $node;
    var $nextNode;

    public function __construct($distance, $node){

    	$this->distance=$distance;
    	$this->node = $node;
    	$this->nextNode=null;
    }

}//Fin de la clase