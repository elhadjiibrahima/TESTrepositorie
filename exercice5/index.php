<h1>Exercice5</h1>
<?php
include_once "fonction.php";
define('VAL_MIN',-5);
define('VAL_MAX',5);
$xa=rand(VAL_MIN,VAL_MAX);
$xb=rand(VAL_MIN,VAL_MAX);
$ya=rand(VAL_MIN,VAL_MAX);
$yb=rand(VAL_MIN,VAL_MAX);
echo 'A de coordonnee '.$xa .' et '.$ya.'<br/>';
echo 'B de coordonnee '.$xb.' et '.$yb.'<br/>';
echo 'la distance  entre A et B est de '.coordonnees_des_points($xa,$ya,$xb,$yb). '<br/>';
?>