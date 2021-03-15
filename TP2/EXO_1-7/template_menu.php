<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Accueil' ),
'cv' => array( 'Cv' ),
'ci' => array('Mes Projets')
);




echo "<nav class=\"menu\">";

foreach($mymenu as $pageId => $pageParameters) {
echo "<u1>
        <li><a href=index.php?page=$pageId>$pageParameters[0]</a></li>
    </u1>";

}
echo "</nav>";
}
?>



