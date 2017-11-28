 <?php
session_start();
var_dump($_POST);
?>;
   
   <!DOCTYPE html>
    <html lang=fr>

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/authentification.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    </head>

    <body>
        <div class="INSCRIPT-page">
            <div class="form">
                <form method="post" action="traitement-inscription.php" class="register-form">
                    <input type="text" name="name" placeholder="name" />
                    <input type="password" name="password" placeholder="password" />
                    <input type="mail" name="email" placeholder="email address" />
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>

                <form method="post" action="traitement-connexion.php" class="CONNECT-form">
                    <input type="text" name="name" placeholder="username" />
                    <input type="password" name="password" placeholder="password" />
                    <button>login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>

        <script type="text/javascript" src="index.js"></script>




    </body>

    </html>