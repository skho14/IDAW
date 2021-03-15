
<?php
function renderMenuToHTML($currentPageId,$currentLangage) {
    $mymenu = array(
        'accueil' => array( 'Accueil', 'Home'),
        'cv' => array( 'CV', 'Resume'),
        'ci' => array('Mes hobbies', 'My hobbies'),
        'contact'=> array( 'Contact' , 'Contact' )
    );

    $currentLangageIndex=1;
    if ($currentLangage == 'fr')
        $currentLangageIndex=0;
    
    echo "<nav class=\"menu\"><u1>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li><a ";
        if ($currentPageId==$pageId)
            echo "class=\"selected\"";
        echo "href=index.php?page=$pageId&lang=$currentLangage>$pageParameters[$currentLangageIndex]</a></li>";
    }
    echo "</u1></nav>
    <nav class=\"langue\">
    <ul>
    <a href=index.php?page=$currentPageId&lang=en>Anglais</a>;
    <a href=index.php?page=$currentPageId&lang=fr>Français</a>
    </u1></nav>";
}
?>

