<?php

require_once './models/User.php';
require_once './models/Admin.php';

// use models\EmpleadoFreelancer;
// use models\EmpleadoPlanta;
// use models\Empleado;

$user = new User;
$user->type = new Admin;
$user->type->greet();

require_once './models/Empleado.php';
require_once './models/EmpleadoFreelancer.php';
$empleadoFreelancer = new EmpleadoFreelancer('Ander', 50000, 20);
echo $empleadoFreelancer->getNombre() . "\n";
echo $empleadoFreelancer->calcularSalario() . "\n";

require_once './models/EmpleadoPlanta.php';
$empleadoPlanta = new EmpleadoPlanta('Juan', 2500000);
echo $empleadoPlanta->getNombre() . "\n";
echo $empleadoPlanta->calcularSalario() . "\n";