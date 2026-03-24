<?php
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
$page_tile = "Contact";
$meta_descritipion = "This is the page to contact me";
?>

<h1>Contact</h1>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus sit amet mi ullamcorper, ac imperdiet neque tempus. Sed nec mattis odio. Proin pellentesque ipsum lacus, sit amet suscipit nunc sodales sagittis. Vivamus tristique mi quis ultrices laoreet. Aliquam luctus semper ante a posuere. Nulla iaculis orci vitae lorem interdum, sed porttitor elit feugiat. Integer pretium purus a imperdiet convallis. Morbi viverra dolor a erat bibendum rutrum. Fusce quis pharetra mauris, non auctor odio. Nunc hendrerit enim in elit finibus, sed pellentesque libero molestie. Integer non bibendum ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sed magna ultrices, aliquet neque sit amet, faucibus urna.
</p>

<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" required minlength="2" maxlength="255"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" required minlength="2" maxlength="255"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br>
</form>


<?php require_once __DIR__ . "/templates/footer.php"; ?>