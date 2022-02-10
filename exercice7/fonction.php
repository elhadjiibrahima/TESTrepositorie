<?php

function testSaisi($j,$m,$a){
    if(isset($_POST['valide'])){
        if(empty($_POST['j']) || empty($_POST['m']) || empty($_POST['a'])){
            header('location:index.php');
        }
        else{
            if(intval($_POST['j']) && intval($_POST['m']) && intval($_POST['a'])){
                dateValide($j,$m,$a);

            }
            else{
            header('location:index.php');
            }

        }
    }
}
function dateValide($j,$m,$a){
    if(($j<0 && $j>31) || ($m<0 && $m>12)){
        header('location:index.php');
    }
    else{
        if($j<31){
            $j=$j+1;
            echo 'le jour suivant est '.$j.'/'.$m.'/'.$a ;
        }
        else{
            if($j==31){
            echo 'le jour suivant est 1/'.($m+1).'/'.$a ;

            }
        }
    }


}
 
 
?>