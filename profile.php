<?php
$title_page = "Profile";
$meta_description = "This is the profile page of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/core/auth_manager.php";
require_once __DIR__ . "/models/user_model.php";
require_once __DIR__ . "/templates/header.php";
?>
<h1>Profile</h1>
<?php if (!is_connected()): ?>
    <h2>You must <a href="<?= BASE_URL ?>/login.php">log in</a> to see your profile.</h2>
<?php else: ?>
    <?php $user = get_user_by_id($_SESSION['user_id']); ?>

    <p>Nickname : <?= htmlspecialchars($user["usr_nickname"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
    <p>Email : <?= htmlspecialchars($user["usr_email"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
    <form method="post" action="<?= BASE_URL ?>/handlers/handle_logout.php">
        <button type="submit">Log out</button>
    </form>
<?php endif; ?>

<?php require_once __DIR__ . "/templates/footer.php"; ?>