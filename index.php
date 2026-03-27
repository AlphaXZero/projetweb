<?php
$title_page = "Home";
$meta_description = "This is the homepage of my site";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/templates/header.php";
?>

<h1 data-aos="fade-up">Home</h1>
<h2 data-aos="fade-up" data-aos-delay="100">Current weather:</h2>
<div id="weather-widget" class="weather-widget" data-aos="fade-up" data-aos-delay="200">
    <p>Loading weather...</p>
</div>
<h2 data-aos="fade-up" data-aos-delay="300">Interesting text:</h2>
<p data-aos="fade-up" data-aos-delay="400">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum metus sit amet mi ullamcorper, ac imperdiet neque tempus. Sed nec mattis odio. Proin pellentesque ipsum lacus, sit amet suscipit nunc sodales sagittis. Vivamus tristique mi quis ultrices laoreet. Aliquam luctus semper ante a posuere. Nulla iaculis orci vitae lorem interdum, sed porttitor elit feugiat. Integer pretium purus a imperdiet convallis. Morbi viverra dolor a erat bibendum rutrum. Fusce quis pharetra mauris, non auctor odio. Nunc hendrerit enim in elit finibus, sed pellentesque libero molestie. Integer non bibendum ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sed magna ultrices, aliquet neque sit amet, faucibus urna.
</p>
<p data-aos="fade-up" data-aos-delay="500">
    Morbi molestie placerat mi in scelerisque. Cras tempor interdum elit, eu sagittis leo lobortis eget. Maecenas volutpat justo nec nibh fringilla, id laoreet ex bibendum. Donec risus eros, fermentum sit amet suscipit a, viverra at orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam luctus dui non est hendrerit maximus. Nulla posuere lobortis libero at malesuada. Morbi dui leo, sodales et nulla nec, blandit cursus leo. Pellentesque libero quam, luctus id congue et, eleifend sed nisl. Sed molestie nisi nec metus auctor feugiat.
</p>
<?php require_once __DIR__ . "/templates/footer.php"; ?>