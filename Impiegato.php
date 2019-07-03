
<?php

require_once 'Persona.php';


class Impiegato extends Persona
{

  public $mansione;
  public $livello;
  public $num_matricola;
  protected $iban;

  function __construct($n, $c, $s, $mansione, $livello){
    parent::__construct($n, $c, $s);
    $this->mansione =$mansione;
    $this->livello = $livello;
  }

  // function getMatricola(){
  //   return $this->$num_matricola;
  // }

}


 ?>
