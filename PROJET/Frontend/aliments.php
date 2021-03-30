
<?php
require_once("template_header.php");
?>
  
<body>
  
<table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    
                    <th scope="col">Modification</th>
                </tr>
            </thead>
            <tbody id="alimentsTableBody">
            <?php

            $servname = 'localhost';
            $dbname = 'imangermieux';
            $user = 'root';
            $pass = 'root';
           
          
            try
            {
              // On se connecte à MySQL
              $bdd = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",  $user, $pass);
            }
            catch(Exception $e)
            {
              // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }


            $reponse = $bdd->query('SELECT Nom ,Type  FROM Aliments');

            while ($donnees = $reponse->fetch())
            {
            ?>
                <tr>
                  <td><?php echo $donnees["Nom"]; ?></td>
                  <td><?php echo $donnees["Type"]; ?></td>
                  
                  <td><button>Editer</button> <button>Supprimer</button></td>
                </tr>
            <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête

            ?>
            </tbody>
</table>




<h1> Ajout aliment </h1>



<form id="ajoutAliment" action="../Backend/Add_Aliment.php" method="POST">
  <table>
    <tr>
      <th>Nom </th>
      <td><input type="text" name="nom"></td>
    </tr>
    
    <tr>
      <th>Type</th>
      <td><input type="text" name="type"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="Ajouter" /></td>
    </tr>
  </table>
</form>

</body>
</html>



