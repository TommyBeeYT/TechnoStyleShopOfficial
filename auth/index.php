<?php

$page = isset($_GET["page"]) ?  $_GET["page"] : "dashboard";

?>

<?php include "../inc/init.php" ?>
<?php include ROOT_PATH . "public/template-parts/header.php" ?>


<?php include ROOT_PATH . "auth/page/" . $page . ".php"?>

<?php include ROOT_PATH . "public/template-parts/footer.php" ?>
