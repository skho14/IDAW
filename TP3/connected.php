<?php
    
    $users = array( 
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );
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
        } 
        else{
            $errorText = "Erreur de login/password";
        } 
    }
    else{
        $errorText = "--";
    }
    if(!$successfullyLogged) {
        echo "<center> $errorText </center>";
    } 
    else{
        $_SESSION['login'] = $tryLogin;
    }
?>