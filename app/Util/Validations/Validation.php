<?php

namespace app\Util\Validations;

 class Validation {

     public function filterUsername($username) {
         $username = filter_var(trim($username), FILTER_SANITIZE_STRING);
         $pattern = "/^[a-zA-z]*$/";

         if (filter_var($username, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $pattern)))) {
             return $username;
         } else {
               echo false;
         }
     }


     public function filterEmail($email) {
         $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

         $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';

         if (preg_match($pattern, $email)) {
             return $email;
         } else {
             echo false;
         }
     }


     public function filterPassword($password){
         $password = filter_var(trim($password), FILTER_SANITIZE_STRING);
         $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

         if(preg_match($pattern, $password)){
             return $password;
         }

         else{
             return false;
         }
     }
 }