<?php require_once __DIR__ . "/../config/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <meta name="description" content="<?= $meta_description ?? "default description" ?>">
    <script src="<?= BASE_URL ?>/assets/js/toast.js"></script>
    <title><?= $title_page ?? "default" ?></title>
</head>

<body>
    <?php require_once __DIR__ . "/navbar.php" ?>


    <main>