<?php
include ('./app/Util/autoloader.php');
use app\Model\UserModel as UserModel;
use app\Util\Validations\Validation as Validation;
$ObjectModel = new UserModel();
$ValidObject = new Validation();

if(isset($_POST['signup-submit'])){

    $username = $ValidObject->filterUsername($_POST["username"]);
    $email = $ValidObject->filterEmail($_POST["email"]);
    $password = $ValidObject->filterPassword($_POST["password"]);

//    if(isset($_POST['username'], $_POST['password'], $_POST['email'])){
//        if(!$username){
//            $usernameErr = "Only alphabets and white space are allowed";
//        }
//    }

    if($username && $email && $password) {
        $emailExists = $ObjectModel->EmailExit($email);

        if (!$emailExists) {
            $store = $ObjectModel->UserRegiseter($username, $email, $password);

            if ($store) {
                header("location: ./view/login.php");
                exit;
            } else {
                echo  "Registration failed. Please try again.";
            }
        } else {
            $emailErr = "Email already exists. Please choose another.";

        }
    } else {
        $usernameErr=$emailErr=$passwordErr= "Please fill in all the required fields.";

    }
//    if(!$username){
//        $usernameErr = "Only alphabets and white space are allowed";
//    }

//    if(!$password){
//        $passwordErr = "match the password";
//    }

}

include_once './view/register.php';





