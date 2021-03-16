<?php


$currentLangage = 'fr';
if(isset($_GET['lang'])) {
  $currentLangage = $_GET['lang'];
}

$currentPageId = 'accueil';
if(isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}

$currentStyle = 'habillage';
if(isset($_COOKIE['cstyle'])){
  $currentStyle = $_COOKIE['cstyle'];
}

if(isset($_GET['css'])) {
  $currentStyle = $_GET['css'];
  setcookie("cstyle", $currentStyle, time()+3600);
}
?>


<?php
  require_once('template_header.php');
  require_once('login.php');
  require_once("template_menu.php");
  
  renderMenuToHTML($currentPageId, $currentLangage, $currentStyle);
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
