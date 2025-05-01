<?php

require_once '../model/rols.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rol = new rols();
    $rol->rol     = $_POST['rol']; 
    $rol->description   = $_POST['description'];
    $rol->state = isset($_POST['state']) ? 1 : 0;
    $rol->create();

    header('Location: indexrol.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    include '../view/form_createrol.php';
    exit;
}
