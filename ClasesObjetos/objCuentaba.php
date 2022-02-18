<?php
require_once("clase_cuenta_bancaria.php");
$objCuentabancaria = new Cuentabancaria (1001,"Ahorro",1050000.55,"Retiro");
echo $objCuentabancaria->id. "<br>";
echo $objCuentabancaria->tipo_de_cuenta. "<br>";
$objCuentabancaria->getCuentabancaria();
print_r('<pre>');
print_r($objCuentabancaria);
print_r('</pre>');
echo "<br>";
echo $objCuentabancaria-> retirar_dinero(1500000.3)."<br>";
echo $objCuentabancaria->saldo;


echo "tipo cuenta:" . $objCuentabancaria ->getTipocuenta();
$objCuentabancaria->setTipocuenta(" Cuenta Corriente ");
echo "<br>";
echo "Tipo de cuenta.". $objCuentabancaria->getTipocuenta();



?>