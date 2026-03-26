<?php
require_once dirname(__DIR__) . '/config/config.php';

function get_database_connection(): PDO
{
    $config = get_database_config();

    $dsn = "mysql:host={$config['server']};dbname={$config['database']};charset=utf8mb4";

    $pdo = new PDO($dsn, $config['username'], $config['password']);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
