<?php
$title_page = "Contact";
$meta_description = "This is the page to contact me";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/handlers/handle_contact.php";
?>

<h1>Contact</h1>

<form method="post" data-aos="fade-in" data-aos-delay="200">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" required minlength="2" maxlength="255" value="<?= htmlspecialchars($old_values["fname"] ?? "") ?>">
    <div class="error_log<?= !empty($errors["fname"]) ? " active" : "" ?>" id="fname_log"><?= $errors["fname"] ?? "" ?></div>

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

    <?php if ($status_msg !== ""): ?>
        <script>
            new Toast(
                "<?= htmlspecialchars($status_msg, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>",
                "<?= empty($errors) ? 'success' : 'error' ?>"
            ).show();
        </script>
    <?php endif; ?>
</form>


<?php require_once __DIR__ . "/templates/footer.php"; ?>