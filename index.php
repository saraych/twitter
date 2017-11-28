<?php 

session_start();

ini_set('display_errors',1);
ini_set('error_reporting',E_ALL);

 require ('includes/init.php');

        $req = $bdd->prepare("SELECT * FROM tweet");
    
        $req->execute();
        $res = $req->fetchAll();
      
      //var_dump($_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
</head>
<body>
    <a href="authentification.php">Se connecter/s'inscrire</a>
    
<?php
    foreach ($res as $item)
    {
        echo"<ul>";
            echo"<li>";
       echo $item['user_name']; echo":"; echo $item['content'];
            echo"</li>";
        echo"</ul>";
    }
    
    ?>
    
</body>
</html>