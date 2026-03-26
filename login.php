<?php
$title_page = "LogIn";
$meta_description = "This is the log in page of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/handlers/handle_login.php";
?>

<form method="post">
    <label for="login_nickname">Nickname:</label>
    <input type="text" id="login_nickname" name="login_nickname" required minlength="2" maxlength="255" value="<?= htmlspecialchars($old_values["login_nickname"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["login_nickname"]) ? " active" : "" ?>" id="fname_log"><?= $errors["login_nickname"] ?? "" ?></div>


    <label for="login_password">Password:</label>
    <input type="password" id="login_password" name="login_password" required minlength="8" maxlength="72">
    <div class="error_log<?= !empty($errors["login_password"]) ? " active" : "" ?>" id="message_log"><?= $errors["login_password"] ?? "" ?></div>


    <button type="submit">Submit</button>
    <div class="form_state<?= $status_msg !== "" ? (empty($errors) ? " success" : " error") : "" ?>"><?= $status_msg ?></div>
</form>

<?php require_once __DIR__ . "/templates/footer.php"; ?>