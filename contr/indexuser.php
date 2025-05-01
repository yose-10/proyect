<?php

require_once '../model/users.php';
$user = new user();
$users = $user->getAll();
include '../view/listuser.php';
exit;
