<?php
function resulta($n){
    // $i=0;
    for($i=1 ;$i<=$n;$i++){
        echo $i.' Entrez un nombre <input type="text" name="n" ><br>';

    }
}
function testSaisi($n){
    if(isset($_POST['valide'])){
        if(empty($_POST['n'])){
            header('location:index.php');
        }
        else{
            if(is_numeric($_POST['n']) ){
                if(intval($_POST['n'])){

                    
                    if($n>=0){
                        resulta($n);
                    }
                    else{
                        header('location:index.php');
                    }
                }
            }
            else{
                    header('location:index.php');
                }
        }
    }
}
?>