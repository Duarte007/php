<?php

class Pessoa{
    protected $name;
    protected $age;
    const SPECIES = "Humano";

    public function __construct($defaultName){
        $this->name = $defaultName;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setAge($newAge){
        $this->age = $newAge;
    }

    public function getAge(){
        return $this->age;
    }
}
