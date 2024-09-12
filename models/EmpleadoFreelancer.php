<?php

// namespace models;
class EmpleadoFreelancer extends Empleado
{
    private $tarifaPorHora;
    private $horasTrabajadas;
    public function __construct($nombre, $tarifaPorHora, $horasTrabajadas)
    {
        parent::__construct($nombre);
        $this->tarifaPorHora = $tarifaPorHora;
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSalario()
    {
        return $this->tarifaPorHora * $this->horasTrabajadas;
    }
}