<?php
require_once("clase_cliente.php");

$objCliente =new Cliente(1000200,"Gerardo Mendez","gerardo@gmail.com");
$objCliente->getDatospersonales();
print_r('<br>');
print_r('<pre>');
print_r($objCliente);
print_r('</pre>');

?>