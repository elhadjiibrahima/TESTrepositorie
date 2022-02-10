<?php
function resulta($n){
    $i=0;
    for($i=1 ;$i<=10;$i++){
        echo '<ul> <li>'.($i*$n).'</li> </ul>';

    }
}
function testSaisi($n){
    if(isset($_POST['valide'])){
        if(empty($_POST['a'])){
            header('location:index.php');
        }
        else{
            if(is_numeric($_POST['a'])){
                if($n>=0){
                    resulta($n);
                }
                else{
                    header('location:index.php');
                }
            }
            else{
                    header('location:index.php');
                }
        }
    }
}
?>