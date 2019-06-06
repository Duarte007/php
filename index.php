<?php

require "classes/Pessoa.php";
require "classes/Programador.php";
require "ConectarDB.php";
require "ConectarSite.php";
// require_once "Pessoa.php";
// include "Pessoa.php";

$dev = new Programador("Duarte", "Frontend");

var_dump($dev->getName());

var_dump($dev->getEspecialidade());

var_dump($dev::ESPECIE);

var_dump(ConectarSite\conectar());
