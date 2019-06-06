<?php

require "classes/Person.php";
require "classes/Dev.php";
require "ConnectDB.php";
require "ConnectSite.php";
// require_once "Pessoa.php";
// include "Pessoa.php";

$dev = new Programador("Duarte", "Frontend");

var_dump($dev->getName());

var_dump($dev->getSpecialty());

var_dump($dev::SPECIES);

var_dump(ConnectDB\connect());
