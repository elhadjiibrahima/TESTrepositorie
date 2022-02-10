<?php
 function testDeSaisi($n){
     if(isset($_POST['btn'])){
         header('location:index.php');
     }
     else{
         if(is_numeric($_POST['contenu'])){
             header('location:index.php');
         }
         else{
             echo 'bonjour' ;
         }
     }
 }
?>