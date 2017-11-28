<?php
 session_start();
 ini_set('display_errors',1);
 ini_set('error_reporting',E_ALL);

  

  require('includes/init.php');


if(empty ($_SESSION['user'])){
    header('location:authentification.php');
}

  if(!empty ($_POST['content'])){
       
 $content = $_POST['content'];
 $user_id = $_SESSION['user']['id'];
 $user_name=$_SESSION['user']['name'];
 
 $req = $bdd->prepare("INSERT INTO tweet(content,user_id,user_name)VALUES(:content, :user_id, :user_name)");

 $req->bindValue(":content",$content,PDO::PARAM_STR);
 $req->bindValue(":user_id", $user_id,PDO::PARAM_STR);
 $req->bindValue(":user_name", $user_name,PDO::PARAM_STR);
 $req->execute();
      
header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="textarea" name="content" placeholder="content">
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>


