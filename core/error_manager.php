<?php
require_once dirname(__DIR__) . '/config/config.php';

function handleException(Exception $e): void
{
    if (defined('DEV_MODE') && DEV_MODE === true) {
        echo 'An error occurred: ' . $e->getMessage();
    } else {
        $logPath = dirname(__DIR__) . '/logs/errors.log';
        $message = date('[Y-m-d H:i:s] ') . $e->getMessage() . PHP_EOL;
        error_log($message, 3, $logPath);
    }
}
