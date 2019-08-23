<?php

   class Session {
      public function set($id,$username){
         session_start();
         $_SESSION["id"] = $id;
         $_SESSION["username"] = $username;
      }
      public function check(){
         session_start();
         if(isset($_SESSION['id'])){
            header("Location: index.php");
         }
      }
      public function unset(){
         session_start();

         session_destroy();

         header('Location: index.php');	
      }
   }

?>