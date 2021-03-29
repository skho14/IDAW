<?php
require_once("template_header.php")
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



