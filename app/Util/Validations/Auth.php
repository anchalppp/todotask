<?php

namespace app\Util\Validations;

  class Auth{

     public static function authUser(){
          if(isset($_SESSION['loggedin']) && isset($_SESSION['userid'])){
              return $_SESSION['userid'];
          }else{
              return false;
          }
      }


     public static function loginUSer($xyz, $email, $password){
         $variablesss = $xyz->validateUser($email, $password);
         if(count($variablesss) > 0){
             $_SESSION['loggedin'] = true;
             $_SESSION['userid'] = $variablesss[0]['id'];
             $_SESSION['username'] = $variablesss[0]['username'];
//             $_SESSION['email'] = $variablesss[0]['email'];
//             $_SESSION['password'] = $variablesss[0]['password'];
             return true;
         }
         else{
             return false;
         }
//
      }
  }



