<?php

class Programador extends Pessoa{

    private $especialidade;

    public function __construct($name, $especialidade){
        $this->name = $name;
        $this->especialidade = $especialidade;

        echo "O objeto ".__CLASS__." foi instanciado\n\n";
        echo "Caminho do arquivo: ".__FILE__."\n\n";
        echo "Diretório do arquivo: ".__DIR__."\n\n";
        echo "Função: ".__FUNCTION__."\n\n";
    }

    public function setEspecialidade($newEspecialidade){
        $this->especialidade = $newEspecialidade;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
}
