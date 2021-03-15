<?php
require_once('template_header.php');
require_once("template_menu.php");

$currentLangage = 'fr';
if(isset($_GET['lang'])) {
  $currentLangage = $_GET['lang'];
}

$currentPageId = 'accueil';
if(isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
?>




<?php
  renderMenuToHTML($currentPageId,$currentLangage);
?>

<section class="corps">
<?php
  $pageToInclude = $currentLangage."/".$currentPageId . ".php";
  if(is_readable($pageToInclude)){
    require_once($pageToInclude);
  }
  else{
    require_once("error.php");
  }
?>
</section>

<?php
require_once('template_footer.php');
?>
