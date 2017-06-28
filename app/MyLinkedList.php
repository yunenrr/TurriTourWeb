<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MyNode;

class MyLinkedList
{
    var $raiz;
    var $counter;

    public function __construct()
    {
        $this->raiz = null;
        $this->counter=0;
    }

    public function isEmpty()
    {
    	if($this->counter==0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function size()
    {
        return $this->counter;
    }

    public function orderedInsert($distance, $node)
    {
        $this->counter+=1;

        if($this->raiz==null)
        {
            $newNode = new MyNode($distance, $node);
            $this->raiz=$newNode;
        }
        else
        {
            if($distance<=$this->raiz->distance)
            {
                $newNode = new MyNode($distance, $node);
                $newNode->nextNode = $this->raiz;
                $this->raiz = $newNode;
            }
            else
            {
                $aux = $this->raiz;
                $newNode = new MyNode($distance, $node);

                while($aux->nextNode!=null)
                {
                    if($distance<=$aux->nextNode->distance)
                    {
                        $newNode->nextNode = $aux->nextNode;
                        $aux->nextNode = $newNode;
                        break;
                    }
                    else
                    {
                        $aux=$aux->nextNode;
                    }
                }
                if($aux->nextNode==null)
                {
                   $aux->nextNode = $newNode;
                }
            }
        }
    }

    public function getNode($position)
    {
        $count = 0;
        $aux= $this->raiz;

        while ($count<$position && $aux!=null)
        {
            $aux=$aux->nextNode;
            $count+=1;
        }
        $newNode = new MyNode($aux->distance, $aux->node);
        return $newNode;
    }
    public function cut($point)
    {
        $count = 0;
        $aux= $this->raiz;

        if($this->raiz!=null)
        {
            while ($count<$point && $aux->nextNode!=null)
            {
                $aux=$aux->nextNode;
                $count+=1;
            }
            $aux->nextNode=null;
            
            $this->counter=$count;
        }
    }
}//Fin de la clase