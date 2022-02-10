<h1>Exercice2</h1>
<?php
include_once "fonction.php";
echo("le perimetre est: " .perimetre_rectangle(rand($largeur=0,$largeur=60),rand($longueur=10,$longueur=100))."<br/>");
  echo("La surface est: ".("\n") .surface_rectangle(rand($largeur=0,$largeur=60),rand($longueur=10,$longueur=100)). "<br/>");
  echo(("Le diagonale est: ") .diagonale_rectangle(rand($largeur=0,$largeur=60),rand($longueur=10,$longueur=100)));
    
 
?>