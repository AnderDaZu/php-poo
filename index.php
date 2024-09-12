<?php

require_once './models/User.php';
require_once './models/Admin.php';

$user = new User;
$user->type = new Admin;
$user->type->greet();