<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!doctype html>
<html>
    <head>
        <title>Déconnexion</title>
        <link rel="stylesheet" href="style1.css" type="text/css"
        media="screen" title="default" charset="utf-8" />
    </head>
    <body>
        <h1>Vous avez bien été deconnecté</h1>
        <a href='connected.php'>Retour à page de connexion</a>
    </body>
</html>