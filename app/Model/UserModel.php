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
          $registerQuery = "SELECT * FROM users WHERE email=:email";
//          $registerQuery->bindParam(':email', $email, PDO::PARAM_STR);
          $result = Db::getDatabse()->query($registerQuery, array(':email'=>$email), $type='select');
//          if($result){
//             return true;
//          }
//          return false;
         return $result ;
          //write a query
          //prepare a statement
          // execute the statement
          // its return the result


      }


  }







?>