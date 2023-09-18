<?php 
require "Pessoa.php";
require "Programador.php";
include "Connect.php";
include "Connect2.php";


$programador = new Programador("Geysom", "PHP");

echo $programador->getNome();

//constantes

echo $programador::ESPECIE;

//namespaces
ConectarBanco\Conectar();
ConectarSite\Conectar();
?>