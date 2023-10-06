<?php
session_start();
//if (isset($_SESSION['logged_in'])) {
//    header('location: dash.php');
//}
include ('./app/Util/autoloader.php');
use app\Model\UserModel as UserModel;
use app\Util\Validations\Auth as Auth;
use app\Util\Validations\Validation as Validation;
$ObjectModel = new UserModel();
$ValidObject = new Validation();

$emailErr ="";
$passwordErr="";

if(Auth::authUser()){
    header('location: dash.php');
}

 if (isset($_POST['login-btn'])) {

     $email = $_POST['email'];
     $password = $_POST['password'];

         $email = $ValidObject->filterEmail($_POST["email"]);
         $password = $ValidObject->filterPassword($_POST['password']);
     if (!empty($_POST["email"]) && !empty($_POST["password"])) {
         if ($email && $password) {
             if (Auth::loginUser($ObjectModel, $email, $password)) {
//                 header('location: dash.php');
                 echo "<script>alert('Login Successfully done!!'); window.location='dash.php';</script>";

             } else {
                 echo "email and password does not match";
             }
         }else{
             echo  "Please check one or more fields are blank.";
         }
     }
//     echo "login failed";
 }
include './view/login.php';
