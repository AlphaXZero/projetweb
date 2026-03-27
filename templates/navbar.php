<?php
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../core/auth_manager.php";
require_once __DIR__ . "/../models/user_model.php";
$current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<nav>
    <ul class="nav-left">
        <li><a href="<?= BASE_URL ?>/index.php" class="<?= $current_page == BASE_URL . "/index.php" ? "active" : "" ?>">Home</a></li>
        <li><a href="<?= BASE_URL ?>/contact.php" class="<?= $current_page == BASE_URL . "/contact.php" ? "active" : "" ?>">Contact</a></li>
        <li><a href="<?= BASE_URL ?>/profile.php" class="<?= $current_page == BASE_URL . "/profile.php" ? "active" : "" ?>">Profile</a></li>
    </ul>
    <ul class="nav-right">
        <?php if (is_connected()): ?>
            <li>Connected as <?= htmlspecialchars(get_user_by_id($_SESSION['user_id'])["usr_nickname"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></li>
            <li>
                <form method="post" action="<?= BASE_URL ?>/handlers/handle_logout.php">
                    <button type="submit">Log out</button>
                </form>
            </li>
        <?php else: ?>
            <li><a href="<?= BASE_URL ?>/register.php" class="<?= $current_page == BASE_URL . "/register.php" ? "active" : "" ?>">Register</a></li>
            <li><a href="<?= BASE_URL ?>/login.php" class="<?= $current_page == BASE_URL . "/login.php" ? "active" : "" ?>">Log In</a></li>
        <?php endif; ?>
    </ul>
</nav>