<?php

// namespace models;
class EmpleadoPlanta extends Empleado
{
    private $salarioBase;

    public function __construct($nombre, $salarioBase)
    {
        parent::__construct($nombre);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario()
    {
        return $this->salarioBase;
    }
}