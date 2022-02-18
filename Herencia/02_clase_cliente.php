<?php
require_once("02_clase_persona.php");

class Cliente extends Persona{

    private $credito;

    public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito)
    {
     parent:: __construct($vrcedula, $vrnombre, $vredad, $vrcredito);
     $this->salario = $vrsalario;   
    }
    public 
}






?>