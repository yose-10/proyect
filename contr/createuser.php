<?php

require_once '../model/users.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = new User();
    $user->ci     = $_POST['ci']; 
    $user->names   = $_POST['names'];
    $user->lastnames = $_POST['lastnames'];
    $user->age      = $_POST['age'];
    $user->mail    = $_POST['mail'];
    $user->phone  = $_POST['phone'];
    $user->rol       = $_POST['rol'];
    $user->create();

    header('Location: indexuser.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {

    $rol = new user();
    $rols = $rol->getRol();
    include '../view/form_createuser.php';
    exit;
}
