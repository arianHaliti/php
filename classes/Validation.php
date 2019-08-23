<?php

class Validation {
   private $check;
   private $db =null;
   private $errors= array();

   public static function validateUser($post,$rules){
      $errors = array();
   
      foreach($rules as $field => $field_val){
         foreach($field_val as $rules_desc => $rules_val){
            // echo $field . ' @ ' . $rules_desc. ' --- '. $rules_val . '  |||||   '. $post[$field];
            // echo "<br><br>";
            if($rules_desc === 'required' && empty($post[$field]) ){
               $errors[]= $field .' is empty';
               break;
            }else{
               
               if($rules_desc ==='max' && !( strlen($post[$field]) <= $rules_val)){
                  
                  $errors[] = $field .' is to big' ;
               }

               if($rules_desc ==='min' && ( strlen($post[$field]) <= $rules_val)){
                  
                  $errors[] = $field .' is to small' ;
                  
               }

               // echo $rules_val . ' ..... ';
               if($rules_desc ==='match' && ($post[$field] !== $post[$rules_val])){
                  
                  $errors[] = $field .' does not match' ;
               }
            }
         }
      }
      // var_dump( $errors);
      if(empty($errors)){
         return 'Success';
      }else
      {
         return $errors;
      }
      
   }
}

?>