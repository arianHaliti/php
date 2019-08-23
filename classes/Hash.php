<?php

   class Hash {
      public static function make ($str , $salt){
         return hash('sha256', $str . $salt);
      }
      public static function salt ($length){
         return mcrypt_create_iv($length);
      }
      // public static function unique (){
      //    return self::make(uniqid());
      // }
   }

?>