<?php

class Cuentabancaria{
    //atributos
    public $id;
    public $tipo_de_cuenta;
    public $saldo;
    public $movimientos;
    public $fecha_movimiento;
    public $vr_saldo;



    //metodos principal
    function __construct($vr_id, string $vr_tipo_cuenta, float $vr_saldo,$vr_movimientos )
    {
        $this-> id = $vr_id;
        $this-> tipo_de_cuenta = $vr_tipo_cuenta;
        $this-> saldo = $vr_saldo;
        $this-> movimiento = $vr_movimientos;
        $this->fecha_movimiento= date('Y-m-d');

    }//end__cosntructor

    //metodos secundarios
    public function getCuentabancaria(){
        $arrayCuentabancaria = Array(
            'No. Cuenta:'=> $this->id,
            'Tipo de cuenta:'=> $this-> tipo_de_cuenta,
            'Saldo:'=> $this->saldo,
            'Movimiento:'=> $this->movimientos,
            'fecha:'=> $this->fecha_movimiento,
        );
        return$arrayCuentabancaria;
    }
public function retirar_dinero (float $retiro){
if ($this->saldo > $retiro ){
    $var_saldo = $this->saldo;
    $vr_saldo = $vr_saldo - $retiro;
    $this->saldo = $vr_saldo;

}else{
    echo " El monto excede el saldo de la cuenta ";
}
echo " valordel retiro:$retiro "."nuevo saldo: ". $this->vr_saldo;
}
public function getTipocuenta(){
return $this->tipo_de_cuenta;
}
public function setTipocuenta($cuenta){
    $this->tipo_de_cuenta= $cuenta;
}
}
