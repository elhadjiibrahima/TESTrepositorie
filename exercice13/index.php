<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

        <div>
                <form action="" method="post">      
                        Contenu :<br>
                        <textarea name="text" id="text" cols="70" rows="30"></textarea><br>
                        <input type="submit" value="correction" name="btn">
                </form><br>
                <form action="" method="post">      
                        Contenu :<br>
                  <textarea name="texte" id="text" cols="70" rows="30"><?php
                          include_once 'controleur.php';
                          espace($contenu);
                          ?>
                </textarea><br>
                
        </form>
</div>
</body>
</html>