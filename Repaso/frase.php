<?php

$vrtexto = "Centro de Teleinformatica y produccion Industrial ";
$vrconvertir = "Minuscula";


function convertir_texto($convertir, $texto)
{

    if ($convertir == "Minusculas") {
        $vr_convertir_texto = strtolower($texto);
    } elseif ($convertir == "Mayusculas") {
        $vr_convertir_texto = strtoupper($texto);
    }
    return $vr_convertir_texto;
}
echo convertir_texto($vrconvertir, $vrtexto);
