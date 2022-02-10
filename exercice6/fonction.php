<?php
function testSaisi($a,$b,$c){
    if(isset($_POST['valide'])){
        if(empty($_POST['a']) || empty($_POST['b']) || empty($_POST['c'])){
            header('location:index.php');
        }
        else{
            if(intval($_POST['a']) && intval($_POST['b']) && intval($_POST['c'])){
                equationSecondDegre($a,$b,$c);
            }
            else{
                header('location:index.php');
            }
        }
    }
}




   function equationSecondDegre( $a, $b, $c){
    $delta=pow($b,2)-4*$c*$a;
    if($delta==0){
        echo "La solution est ".(-1*$b/2*$a);
    }
    elseif($delta>0){
            echo "les solutions sont ".((-1*$b+sqrt($delta))/2*$a);
            echo "les solutions sont ".((-1*$b-sqrt($delta))/2*$a);
        }
        
        else{
            echo "pas de solution";
        }
    }



?>