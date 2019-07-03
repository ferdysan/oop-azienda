
<?php

require 'Persona.php';


class Impiegato extends Persona
{

  public $mansione;
  public $livello;
  protected $num_matricola;
  protected $iban;

  function __construct($mansione, $livello, $num_matricola){

    $this->mansione =$num_matricola;
    $this->livello = $livello;
    $this->num_matricola= $num_matricola;
    parent::__construct($n, $c, $s);

  }

}


 ?>
