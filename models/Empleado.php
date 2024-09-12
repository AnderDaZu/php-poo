<?php

// namespace models;
abstract class Empleado
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    abstract public function calcularSalario();

    public function getNombre()
    {
        return $this->nombre;
    }
}