<?php
$title_page = "Contact";
$meta_description = "This is the page to contact me";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/handlers/handle_contact.php";
?>

<h1>Contact</h1>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus sit amet mi ullamcorper, ac imperdiet neque tempus. Sed nec mattis odio. Proin pellentesque ipsum lacus, sit amet suscipit nunc sodales sagittis. Vivamus tristique mi quis ultrices laoreet. Aliquam luctus semper ante a posuere. Nulla iaculis orci vitae lorem interdum, sed porttitor elit feugiat. Integer pretium purus a imperdiet convallis. Morbi viverra dolor a erat bibendum rutrum. Fusce quis pharetra mauris, non auctor odio. Nunc hendrerit enim in elit finibus, sed pellentesque libero molestie. Integer non bibendum ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sed magna ultrices, aliquet neque sit amet, faucibus urna.
</p>

<form method="post">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" required minlength="2" maxlength="255">
    <div class="error_log<?= !empty($errors["fname"]) ? " active" : "" ?>" id="fname_log" value="<?= htmlspecialchars($old_values["fname"] ?? "") ?>"><?= $errors["fname"] ?? "" ?></div>

    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname" minlength="2" maxlength="255" value="<?= htmlspecialchars($old_values["lname"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["lname"]) ? " active" : "" ?>" id="lname_log"><?= $errors["lname"] ?? "" ?></div>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?= htmlspecialchars($old_values["email"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["email"]) ? " active" : "" ?>" id="email_log"><?= $errors["email"] ?? "" ?></div>

    <label for="message">Message:</label>
    <textarea id="message" name="message" minlength="10" maxlength="3000" required><?= htmlspecialchars($old_values["message"] ?? "") ?></textarea>
    <div class="error_log<?= !empty($errors["message"]) ? " active" : "" ?>" id="message_log"><?= $errors["message"] ?? "" ?></div>

    <button type="submit">Submit</button>
    <div class="form_state<?= $status_msg !== "" ? (empty($errors) ? " success" : " error") : "" ?>"><?= $status_msg ?></div>
</form>


<?php require_once __DIR__ . "/templates/footer.php"; ?>