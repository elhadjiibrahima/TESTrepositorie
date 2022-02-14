<?php
  function phraseTest(array $n):array{
      $contenu=$_POST['text'];
      $m=count($n);
      $tab=[];
      for($i=1;$i<$m+1;$i++){
          $tab=[
             0 => strtoupper('<span class="lettrine">c</span>omme ceci'),
             1 => '',
             2 => '.',
          ];

      }

  }
  function espace($contenu){
    if(isset($_POST['btn'])){
       $contenu=$_POST['text'];
       $searchString = "/\s+/";
       $replaceString = " ";
       $originalString = "$contenu"; 
       $outputString = preg_replace($searchString,$replaceString,$originalString); 
       echo(" $outputString \n"); }
  }

?>