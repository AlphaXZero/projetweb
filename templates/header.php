<?php require_once __DIR__ . "/../config/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <meta name="description" content="<?= $meta_description ?? "default description" ?>">
    <title><?= $title_page ?? "default" ?></title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="<?= BASE_URL ?>/index.php">Home</a></li>
            <li><a href="<?= BASE_URL ?>/contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>