<?php 
session_start();
require_once '../init.php';
$conn = new DB();
$users = $conn->query('SELECT * FROM users',null);
?>
<html>
   <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>


   <body >
      <?php require_once '../header.php';?>
      
      <div class="container">
      <h1> Users</h1>
         <ul class="list-group" id = "list">
            <?php
            if($users){
            foreach($users as $u){
               echo '<li class="list-group-item">'.$u->username.'</li>';
            }
            
            }else{
               echo "<h3> No users found</h3>";
            }
            ?>
         </ul>
        
      </div>
      
   </body>


</html>


