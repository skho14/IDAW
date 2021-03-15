<?php
require_once('template_header.php');
?>


<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Centre d'intérêts</h1>
        <?php
require_once('template_menu.php');
renderMenuToHTML('index');
?>
        <article>
            <section>Sport</section>
            <section>Management</section>
            <section>Voyage</section>
        </article>
    </body>
</html>

<?php
require_once('template_footer.php');
?>

