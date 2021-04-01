<?php
      $servname = "localhost"; 
      $dbname = "imanger";
      $user = "root"; 
      $pass = "root";


      try{
          $dbco = new PDO("mysql:host=$servname ; dbname=$dbname ; charset=utf8", $user, $pass);
          $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM Users WHERE nom='$_POST[nom]'";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            
        }      
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
          
                
?>