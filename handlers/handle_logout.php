<?php
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../core/auth_manager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    disconnect_user();
    header('Location: ' . BASE_URL . '/profile.php');
    exit;
}
