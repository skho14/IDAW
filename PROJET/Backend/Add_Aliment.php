<link rel="stylesheet" href="style.css">

<h1> Ajout aliment </h1>

<?php
    $servname = 'localhost';
    $dbname = 'imangermieux';
    $user = 'root';
    $pass = 'root';
    
    try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $code=$_POST['Code'];
        $name=$_POST['nom'];
        $type=$_POST['type'];

        $sql = "INSERT INTO Aliments (Code, Nom, Type)
        VALUES ('$code','$name','$type')";
        $dbco->exec($sql);
    
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
            
?>

<p>Le nouvel aliment ajouté est <?php echo $_POST['nom']?></p>

<a href="../Frontend/aliments.php">Mes Aliments</a>