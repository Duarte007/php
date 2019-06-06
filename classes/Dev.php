<?php

class Dev extends Person{

    private $specialty;

    public function __construct($name, $specialty){
        $this->name = $name;
        $this->specialty = $specialty;

        echo "O objeto ".__CLASS__." foi instanciado\n\n";
        echo "Caminho do arquivo: ".__FILE__."\n\n";
        echo "Diretório do arquivo: ".__DIR__."\n\n";
        echo "Função: ".__FUNCTION__."\n\n";
    }

    public function setSpecialty($newEspecialidade){
        $this->specialty = $newEspecialidade;
    }

    public function getSpecialty(){
        return $this->specialty;
    }
}
