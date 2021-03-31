<?php

print_r($_POST);
addAlimentToDB();

function addAlimentToDB(){
    $servername = "localhost";
    $dbname = "imangermieux";
    $username = "root";
    $password = "root";

    
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully\n";

    $query = 
        "UPDATE Aliments
        SET name=       '". $_POST['nom']      ."', 
            type=       '". $_POST['type']      ."'
            
        WHERE id=".$_POST['id'];
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}