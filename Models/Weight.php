<?php

trait Weight{
    protected $weight;

    public function setWeight($weight, $unit){
        $this->weight = $weight.$unit;
    }

    public function getWeight(){
        return $this->weight ;
    }


}
    