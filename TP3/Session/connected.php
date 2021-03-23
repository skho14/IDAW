<?php
    session_start();
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi',
        'sam' => 'samkho' );
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    }
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        $_SESSION['login'] = $tryLogin;
        echo "<h1>Bienvenue ".$login."</h1>";
    }

    if ($_SESSION == array()){
        require_once("index.php");
    }
    else{
        $currentLogin = $_SESSION['login'];
        echo "<center> Vous êtes connecté en tant que $currentLogin";
        echo "<a href=\"disconnected.php\"><button type=\"button\">Déconnexion</button></a></center>";
    }
?>