<?php
require_once '../model/rols.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rol = new rols();
    
    $rol->id      = $_POST['id'];
    $rol->rol    = $_POST['rol'];
    $rol->description = $_POST['description'];
    $rol->state      = isset($_POST['state']) ? 1 : 0;
    
    $rol->update($rol->id);
    
    header('Location: indexrol.php');
    exit;

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $rol = new rols();
    $rolData = $rol->getFirst($_GET['id']);

    if (!$rolData) {
        echo "rol  {$_GET['id']} no encontrado.";
        exit;
    } else {
        include '../view/form_updaterol.php';
        exit;
    }
}
