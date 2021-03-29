
<?php
require_once("template_header.php");
$servname = 'localhost';
$dbname = 'imangermieux';
$user = 'root';
$pass = 'root';
  
//Essayer de l'afficher 
//  try{
//    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
//    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $nom = $dbco -> prepare("SELECT * FROM Aliments");
//    $nom -> execute();

//    $resultatnom = $nom -> fetchAll(PDO::FETCH_ASSOC);

//    $inscremant=0;
//    foreach($resultatnom as $numbers => $informationsNom){
//      echo "<tr><td>
//      $informationsNom[Nom] </td><td>
//      $informationsNom[Type] </td>";
//      echo "</td><td> <button onclick=\"edit($informationsNom[Code]-1)\">Edit</button></td>"

//    }
    
//  }
?>






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



