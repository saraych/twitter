<?php 

session_start();
 
//var_dump($_SESSION);
if(empty ($_SESSION['user'])){
    header('location:authentification.php');
}

?>
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/hello.css">
</head>

<body>
    <p> hello!<?php  echo $_SESSION['user']['name'] ?> vous etez connecter</p>
    
    <li><a href="publier.php">Ecrire un tweet </a></li>

    <li><a href="deconnection.php">Se deconnecter</a></li>
    <h1 class="text-center"> Tweet form</h1>
    <div id="app"></div>
    <div class="container">
       
        <div class="row adv">
           
           
            <div class="col-sm-6 col-sm-offset-3 well">


            </div>
        </div>
    </div>
    <div></div>

    <script type="text/javascript" src="hello.js"></script>
</body>

</html>