<?php

require 'Class Pessoa.php';
require 'class Programador.php';

$uma_pessoa = new Programador("João", "PHP");

echo $uma_pessoa->getNome();

echo "<br>";

//Constantes

 echo $uma_pessoa::ESPECIE;