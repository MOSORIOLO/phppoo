<?php


class cuenta
{
    private $nombre;
    private$numCuenta;
    private $tipoInteres;
    private $saldo;

    public function __construct($nombre,$numCuenta,$tipoInteres, $saldo)
    {
        $this-> nombre =$nombre;
        $this-> numCuenta =$numCuenta;
        $this-> tipoInteres = $tipoInteres;
        $this->saldo=$saldo;
    }
}