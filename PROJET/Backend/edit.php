<?php

print_r($_POST);
addAlimentToDB();

function addAlimentToDB(){
    $servername = "localhost";
    $dbname = "projet";
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
        "UPDATE Aliments
        SET name=       '". $_POST['name']      ."', 
            type=       '". $_POST['type']      ."'
            
        WHERE id=".$_POST['id'];
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}