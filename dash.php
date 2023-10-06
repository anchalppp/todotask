<?php

session_start();
include ('./app/Util/Autoloader.php');

use app\Database\Db;
use app\Util\Validations\Auth;


echo $_SESSION['username'] ?? '';

if(!Auth::authUser()){
    header('location: login.php');
}

$conn =Db::getDatabse();

//echo $_SESSION['username'];
//echo $_SESSION['email'];
//echo $_SESSION['password'];
include ('./View/header.php');
echo "Welcome to Dashboard Page!!";

include ('./View/footer.php');

