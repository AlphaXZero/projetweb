<?php require_once __DIR__ . "/../config/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <meta name="description" content="<?= $meta_description ?? "default description" ?>">
    <script src="<?= BASE_URL ?>/assets/js/toast.js"></script>
    <title><?= $title_page ?? "default" ?></title>
</head>

<body>
    <?php require_once __DIR__ . "/navbar.php" ?>


    <main>