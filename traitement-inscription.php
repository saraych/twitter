<?php


 session_start();                                   
 ini_set('display_errors',1);
 ini_set('error_reporting',E_ALL);


      require ('includes/init.php');
     // extract($_POST);
      var_dump($_POST);

if (!empty($_POST['name'])&& ($_POST['email']) && ($_POST['password']))
    {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
       
        $req = $bdd->prepare("INSERT INTO users(name, email, password)VALUES(:name, :email, :password)");
        
       
        $req->bindValue(":name", $name,PDO::PARAM_STR);
        $req->bindValue(":email", $email,PDO::PARAM_STR);
        $req->bindValue(":password",$passwordcrypt,PDO::PARAM_STR);
       
      $res =$req->execute();
    
    
       /* echo "name = " .$name;
        echo "<br/>mail=".$email;
        echo"<br/>password=".$passwordcrypt;*/
    
    header('location:authentification.php');
    echo 'okey'; 
    }
   ?>