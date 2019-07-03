<?php


// definisco una generica classe persona
class Persona
{
  public $nome;
  public $cognome;
  public $sesso;
}

function __construct($n, $c, $s){
  $this->nome  = $n;
  $this->cognome =$c;
  $this->sesso = $s;
}



 ?>
