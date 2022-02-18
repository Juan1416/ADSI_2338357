<?php
$var_numero1= 159;
$var_numero2 = 120;
$var_numero3 = 639;
if($var_numero1>$var_numero2){
    if($var_numero1 > $var_numero3){
    echo " numero ".$var_numero1. " es mayor ";
    }else{
        echo " numero ".$var_numero3." es mayor ";
    }
}else{
    if($var_numero2 > $var_numero3){
    echo " numero ".$var_numero2." es mayor ";
    }else{
        echo " numero ".$var_numero3. " es mayor ";
    }
}
