<?php

print_r($_POST);
deleteAlimentFromDB();

function deleteAlimentFromDB(){
    $servername = "localhost";
    $dbname = "imangermieux";
    $username = "root";
    $password = "root";

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully\n";

    $query = 
        "DELETE FROM Aliments
        WHERE Code=".$_POST['id'];
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}