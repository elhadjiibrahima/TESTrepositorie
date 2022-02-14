<?php
// include_once 'fonction.php';
function espace($contenu){
  if(isset($_POST['btn'])){
     $contenu=$_POST['text'];
     $searchString = "/\s+/";
     $replaceString = " ";
     $originalString = "$contenu"; 
     $outputString = preg_replace($searchString,$replaceString,$originalString); 
     echo(" $outputString \n"); 
     $ct='*[A-Z]';
     $strongPassword = preg_match_all($ct,$contenu);
     echo $strongPassword;
      }
    }
     


?>