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

if(isset($_COOKIE['cstyle'])){
        $currentStyle = $_COOKIE['cstyle'];
    }
?>


<?php
  require_once('template_header.php');
  require_once('login.php');
  require_once("template_menu.php");
  
  renderMenuToHTML($currentPageId, $currentLangage, $currentStyle);
?>


<center>
  <form id="style_form" action="index.php" method="GET">
    <select name="css">
      <option value="style1">style1</option>
      <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
  </form>
</center>



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
