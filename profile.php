<?php
$title_page = "Profile";
$meta_description = "This is the log in page of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/core/auth_manager.php";
?>
caca
<?= is_connected()  ? $_SESSION['user_id'] : "non" ?>


<?php require_once __DIR__ . "/templates/footer.php"; ?>