<?php
function configure_session(): void
{
    ini_set('session.use_strict_mode', 1);

    session_set_cookie_params([
        'secure'   => false, // true en production (HTTPS)
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
}

function connect_user(int $id): void
{
    configure_session();
    session_start();
    session_regenerate_id(true);
    $_SESSION['user_id'] = $id;
}

function is_connected(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        configure_session();
        session_start();
    }
    return isset($_SESSION['user_id']);
}

function disconnect_user(): void
{
    configure_session();
    session_start();
    unset($_SESSION['user_id']);
    session_destroy();
}
