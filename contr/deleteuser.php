<?php

require_once '../model/users.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $del = new user();
    $del->ci = $_POST['ci'];
    $del->delete($del->ci);

    header('Location: indexuser.php');
    exit;
    
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $user = new user();
    $userData = $user->getFirst($_GET['ci']);
    include '../view/form_deleteuser.php';
    exit;
}
