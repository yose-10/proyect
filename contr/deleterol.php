<?php

require_once '../model/rols.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $rol = new rols();
    $rol->id = $_POST['id'];
    $rol->delete($rol->id);

    header('Location: indexrol.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $rol = new rols();
    $rolData = $rol->getFirst($_GET['id']);
    include '../view/form_deleterol.php';
    exit;
}
