<?php
 namespace app\Model;
 use app\Database\Db;


  class UserModel {

      public function UserRegiseter($username, $email, $password){

//          $password_hash = password_hash($password, PASSWORD_BCRYPT);

          $registerQuery ="INSERT INTO users (username, email, password)  VALUES (:username, :email, :password)";
//
//          $registerQuery->bindParam(':username', $username, PDO::PARAM_STR);
//          $registerQuery->bindParam(':email', $email, PDO::PARAM_STR);
//          $registerQuery->bindParam(':password', $password_hash, PDO::PARAM_STR);
//          $result = Db::getDatabse()->query($registerQuery);
//
          $result = Db::getDatabse()->query($registerQuery, array(':username'=>$username, ':email'=>$email, ':password'=>MD5($password)));
          return $result;

      }

      public function EmailExit($email){
          $sqlQuery = "SELECT * FROM users WHERE email=:email";
//          $registerQuery->bindParam(':email', $email, PDO::PARAM_STR);
          $result = Db::getDatabse()->query($sqlQuery, array(':email'=>$email), $type='select');
//
         return $result ;

      }

     public function validateUser($email, $password){
         $sqlQuery = "SELECT id,username,email,password FROM users WHERE email = :email AND password = :password";
          $result = Db::getDatabse()->query($sqlQuery, array(':email'=>$email, ':password'=>MD5($password)), $type='select');
          return $result;
     }


  }







?>