<?php
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../core/auth_manager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    disconnect_user();
    $current_page = $_SERVER['HTTP_REFERER'] ?? BASE_URL . '/index.php';
    header('Location: ' . $current_page);
    exit;
}
