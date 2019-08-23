<?php

class User{
   private $conn;

   public function __construct($user = null){
      $this->conn = new DB();
   }
   public function create($params){
      // var_dump ($params);
      $this->conn->query("INSERT INTO users (`username`, `password`, `salt`, `fullname`) VALUES (?, ?, ?, ?)",$params);
   }

   public function loginUser($username, $password){
      
      $user = $this->conn->query("SELECT * FROM users where username = ?",['username'=> $username]);
      if($user){
         $user = $user[0];
         if($user->password === Hash::make($password, $user->salt)){
            
            Session::set($user->id,$user->username);
            return true;
         }else
         {
            return false;
         }
      }
      return false;
   }
   public function getUsers($p){
      if(!is_numeric($p)){
         return "no";
      }
      // $page = 5*$p;
      // $params = ['page'=>$page];
      $users = $this->conn->query("SELECT * FROM users LIMIT 5 OFFSET 0", null);
      return $users;
      // // var_dump($users);
      // // die();
      // return $users;
   }
   public function logoutUser(){
      Session::unset();
   }

}

?>