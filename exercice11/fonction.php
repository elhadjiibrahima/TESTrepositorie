<?php
    function testeSaisi($n){
        if(isset($_POST['valide'])){
            if(empty($_POST['a'])){
                header('location:index.php');
            }
            else{
                if(is_numeric($_POST['a'])){ 
                  if ($n<10000) {
                header('location:index.php');
                  }
                  else {
                    //   $premier=recuperationDesElements($n);
                    //   var_dump( affichage($premier));
                    //   echo 'les nombres premiers sont:<br> ';
                  print_r( recuperationDesElements($n));
                //   print_r( superieur($premier));
                // echo moyenne($premier);

                  }
                   } 
                else{
                header('location:index.php');
                }               
            }
        }
    }
 function estPremier($nbr):bool{
       $count=2;
       for($i=2;$i<=$nbr/2;$i++){
           if($nbr%$i==0){
               $count++;
               break ;
           }
       }
       return $count==2 && $nbr!=1;
 }
 function recuperationDesElements($nbr):array{
     $tabb=array();
     for($i=1;$i<=$nbr;$i++){
         if (estPremier($i)) {
             $tabb[]=$i;
         }
     }
     return $tabb;
 }

 function moyenne(array $tabb):float{
     $taille=count($tabb);
     $som=0;
    // 
    foreach($tabb as $valeur){
        $som+=$valeur;
    }
     $moy =$som/$taille;
     return $moy;
 }
 function inferieur(array $tabb):array{
     $tabbb=array();
     $moye=moyenne($tabb);
     foreach($tabb as $valeur){
         if($valeur<=$moye){
             $tabbb[]=$valeur;
         }
     }
     return $tabbb;
 }
 function superieur(array $tabb):array{
    $tabbb=array();
    $moye=moyenne($tabb);
    foreach($tabb as $valeur){
        if($valeur>=$moye){
            $tabbb[]=$valeur;
        }
    }
    return $tabbb;
}
function affichage(array $nbr):array{
    $nbr=array();
    '<table>';
     foreach($nbr as $valeur){
         ' <tr>';
         '<td>';
         $nbr[]=$valeur;
         '</td>';
         '</tr>';
        }
         '</table>';
         return $nbr;
    
}
   
?>