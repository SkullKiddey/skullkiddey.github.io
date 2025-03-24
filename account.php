<?php
$email=$_GET['email'];
$mdp=$_GET['password'];

if($email=="macron@elysee.fr" && $mdp=="president"){
    $resultat = "C'est good";
}else{
    $resultat="Mauvaise combinaison adresse mail / mot de passe.";
}

?> 

<html>

<head>
    <title>Myster Quest</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="site.css" rel="stylesheet">
    <meta charset="utf-8">

</head>


<body>
    <div class="account">
        <div class="titre inline center">

            <img src="images/logo.png" alt="Logo">
            <h1>Myster Quest</h1>
        </div>
        <div class="whitebox center">
            <div class="table">
                <div class="colonne1">
                    <div class="soustitre line center"> 
                        <h5> Mon compte </h5> 
                    </div>
                    macron@elysee.fr 
                </div>
                <div class="colonne2">
                    <img class="tickets" src="images/tickets.png" alt="logo">
                </div>
            </div>
            <div class="table">
                <div class="colonne1">
                    <img class="tickets" src="images/blackbox.png" alt="logo">
                </div>
                <div class="colonne2">
                    <img class="tickets" src="images/whitebox.png" alt="logo">
                </div>
            </div>
           
            <div class="logout"> Dé-connexion </div>
        </div>
    </div>
</body>

</html>
