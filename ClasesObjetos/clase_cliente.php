<?php
class Cliente{
    public $cedula;
    public $nombre;
    public $email;
    public $fecha_registro;
    public $pasword;
    function __construct( int $vr_cedula, $vr_nombre,string $vr_email)
    {
        $this-> cedula = $vr_cedula;
        $this-> nombre = $vr_nombre;
        $this-> email = $vr_email;
        $this-> fecha_registro = date('Y-m-d') ;
        $this-> pasword = rand();

    }
    public function getDatospersonales (){
        $arrayDatos = Array (
            'Cedula: '=> $this->cedula,
            'Nombre: '=> $this->nombre,
            'Fecha: ' => $this->fecha_registro,
        );
        return $arrayDatos;
    }
    
}
?>