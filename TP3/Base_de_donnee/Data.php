<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'sam';
            $user = 'root';
            $pass = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO tp3(id,login,password,pseudo)
                        VALUES('5','Pierre','Quai d\'Europe','Toulon')";
     $dbco->exec($sql);
     echo 'Entrée ajoutée dans la table';
 }
 
 catch(PDOException $e){
   echo "Erreur : " . $e->getMessage();
 }
?>
</body>
</html>             