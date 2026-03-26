<?php
function connect_user(int $id): void
{
    session_start();
    $_SESSION['user_id'] = $id;
}

function is_connected(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION['user_id']);
}

function disconnect_user(): void
{
    session_start();
    unset($_SESSION['user_id']);
    session_destroy();
}
