<?php
$title_page = "Profile";
$meta_description = "This is the log in page of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/core/auth_manager.php";
require_once __DIR__ . "/models/user_model.php";
?>
<?= is_connected()  ? get_user_by_id($_SESSION['user_id'])["usr_nickname"] : "<a href='login.php'>You are not logged in </a>" ?>


<?php require_once __DIR__ . "/templates/footer.php"; ?>