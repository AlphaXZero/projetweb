<?php
$title_page = "Register";
$meta_description = "This is the registration page of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/handlers/handle_register.php";
?>

<form method="post">
    <label for="register_nickname">Nickname:</label>
    <input type="text" id="register_nickname" name="register_nickname" required minlength="2" maxlength="255" value="<?= htmlspecialchars($old_values["register_nickname"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["register_nickname"]) ? " active" : "" ?>" id="fname_log"><?= $errors["register_nickname"] ?? "" ?></div>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?= htmlspecialchars($old_values["email"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["email"]) ? " active" : "" ?>" id="email_log"><?= $errors["email"] ?? "" ?></div>

    <label for="register_password">Password:</label>
    <input type="password" id="register_password" name="register_password" minlength="8" maxlength="72" required></input>
    <div class="error_log<?= !empty($errors["register_password"]) ? " active" : "" ?>" id="message_log"><?= $errors["register_password"] ?? "" ?></div>

    <label for="register_password_valid">Confirm password:</label>
    <input type="password" id="register_password_valid" name="register_password_valid" minlength="8" maxlength="72" required></input>
    <div class="error_log<?= !empty($errors["register_password_valid"]) ? " active" : "" ?>" id="message_log"><?= $errors["register_password_valid"] ?? "" ?></div>

    <button type="submit">Submit</button>
    <div class="form_state<?= $status_msg !== "" ? (empty($errors) ? " success" : " error") : "" ?>"><?= $status_msg ?></div>
</form>

<?php require_once __DIR__ . "/templates/footer.php"; ?>