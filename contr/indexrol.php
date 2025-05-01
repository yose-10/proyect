<?php

require_once '../model/rols.php';
$rol = new rols();
$rols = $rol->getAll();
include '../view/listrol.php';
exit;
