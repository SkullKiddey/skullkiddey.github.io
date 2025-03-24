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
    <div class="login">

        <div class="titre inline center">

            <img src="images/logo.png" alt="Logo">
            <h1>Myster Quest</h1>
        </div>
        <form action="account.php" method="GET">
            <div class="whitebox center">
                <img class="avatar center" src="images/avatar.png" alt="avatar">
                    <div class="field center">
                        Email ID<br>
                        <input name="email" type="text"></input>
                    </div>
                    <div class="field center">
                        Mot de passe<br>
                        <input name="password" type="password"></input>
                    </div>
                    <div class="link"><a href="resetpsw.php">Mot de passe oublié</a></div>
                    <div class="spacer"></div>
                    <div class="link"><a href="inscription.php">Inscription</a></div>
                    <input type="submit" value="Connexion" class="bouton center"></input>
            </div>
        </form>
    </div>
</body>

</html>
