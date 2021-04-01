<?php
      $servname = "localhost"; 
      $dbname = "imanger";
      $user = "root"; 
      $pass = "root";


      try{
          $dbco = new PDO("mysql:host=$servname ; dbname=$dbname ; charset=utf8", $user, $pass);
          $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $query1 = "INSERT INTO Aliments (Nom, Type) VALUES('$_POST[nom]', '$_POST[type]')";
          $dbco -> exec($query1);
          
      }
      
      catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
      }
                
?>