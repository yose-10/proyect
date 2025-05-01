<?php
require_once '../model/users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new user();
    
    $user->ci      = $_POST['ci'];
    $user->names    = $_POST['names'];
    $user->lastnames = $_POST['lastnames'];
    $user->age      = $_POST['age'];
    $user->mail    = $_POST['mail'];
    $user->phone  = $_POST['phone'];
    $user->rol       = $_POST['rol'];
    
    $user->update($user->ci);
    
    header('Location: indexuser.php');
    exit;

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['ci'])) {

    $user = new user();
    $userData = $user->getFirst($_GET['ci']);
    $rols = $user->getRol();

    if (!$userData) {
        echo "Usuario con CI {$_GET['ci']} no encontrado.";
        exit;
    } else {
        include '../view/form_updateuser.php';
        exit;
    }
}
