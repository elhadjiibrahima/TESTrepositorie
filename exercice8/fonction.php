<?php
function resulta($n){
    $i=0;
    while ($i<$n){
        
        echo "<ul>  <li>".($i+1)."</li>  </ul>  ";
        $i=$i+1;
    }
}
function testSaisi($n){
    if(isset($_POST['valide'])){
        if(empty($_POST['a'])){
            header('location:index.php');
        }
        else{
            if(intval($_POST['a'])){
                resulta($n);
            }
            else{
                header('location:index.php');
            }
        }
    }
}
?>