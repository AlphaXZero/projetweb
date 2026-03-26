<?php
require_once __DIR__ . "/../config/config.php";
$current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<nav>
    <ul>
        <li><a href="<?= BASE_URL ?>/index.php" class="<?= $current_page == BASE_URL . "/index.php" ? "active" : "" ?>">Home</a></li>
        <li><a href="<?= BASE_URL ?>/contact.php" class="<?= $current_page == BASE_URL . "/contact.php" ? "active" : "" ?>">Contact</a></li>
        <li><a href="<?= BASE_URL ?>/register.php" class="<?= $current_page == BASE_URL . "/register.php" ? "active" : "" ?>">Register</a></li>
        <li><a href="<?= BASE_URL ?>/login.php" class="<?= $current_page == BASE_URL . "/login.php" ? "active" : "" ?>">Log In</a></li>
    </ul>
</nav>