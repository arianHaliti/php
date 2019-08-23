<?php
   
   require_once '../init.php';
   Session::check();
   if($_POST){
      $validate = Validation::validateUser($_POST, array(
         'username' => array(
            'required' => true,
            'max' => 30,
            'min' => 2,
         ),
         'fullname' => array (
            'required' => true,
            'max' =>  128,
            'min' => 2
         ),
         'password' => array (
            'required' => true,
            'max' => 64,
            'min' => 6,
         ),
         'password_confirm' =>array(
            'required' => true,
            'match' => 'password'
         )

      ));
      if($validate === 'Success'){

         $user = new User();
         $salt = Hash::salt(32);
        
         $user->create(
            [
               'username' => $_POST['username'],
               'password' => Hash::make($_POST['password'],$salt),
               'salt' => $salt,
               'fullnane' => $_POST['fullname'],
            ]
         );
         header('location:login.php');

        
      }
   }
  
?>

<html>
   <head>
   <script src="https://www.google.com/reCAPTCHA/api.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>


   <body>
      <?php require_once '../header.php';?>
      <div class="container">
         <form action ="" method="post" name ="register" onsubmit="return validate()">
            <label for="username"> Username</label>
            <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] :'' ?>"><br>

            <label for="fullname"> Full Name</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] :'' ?>"><br>

            <label for="password"> Password</label>
            <input type="password" name="password" id="password" value=""><br>

            <label for="password_confirm"> Confirm Password</label>
            <input type="password" name="password_confirm" id="password_confirm" value=""><br>

            <input type="submit" value="register"><br>
           
            <div id="errors" style="color: red"></div>
            <?php 
            if($_POST){
               if($validate !== 'Success'){
                  foreach($validate as $error){
                     echo $error . '<br>';
                  }
               }

            }
          
            ?>
         </form>
      </div>
   </body>


</html>
<script src="../validate.js"></script>
<script>
function validate() {
   let username = document.forms["register"]["username"].value;
   let fullname = document.forms['register']['fullname'].value;
   let password = document.forms['register']['password'].value;
   let password_confirm = document.forms['register']['password_confirm'].value;

   let rules ={
      username : {
         "required" : true,
         "value" : username,
         "max" : 30,
         "min" : 2
      },
      fullname: {
         "required" : true,
         "value" : fullname,
         "max" : 128,
         "min" : 2
      },
      
      password :{
         "required" : true,
         "value" : password,
         "max" : 64,
         "min" : 6
      },
      password_confirm : {
         "required" : true,
         "value" : password_confirm,
         "match" : password
      }

   }
   errors = validation(rules)
   
   if(errors.length >=1 ){
      
      document.getElementById("errors").innerHTML = "";
      errors.forEach(function(error) {
         var node = document.createElement("p");
            var textnode = document.createTextNode(error);
            node.appendChild(textnode);
            document.getElementById("errors").appendChild(node);
      });
      
      return false
      
   }
   
   return true;
}
</script>
