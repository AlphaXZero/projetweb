<?php
require_once dirname(__DIR__) . '/core/database_manager.php';

function get_user_by_nickname(string $nickname): array|false
{
    $pdo = get_database_connection();

    $query = 'SELECT * FROM t_user_usr WHERE usr_nickname = :nickname';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nickname', $nickname, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_user_by_email(string $email): array|false
{
    $pdo = get_database_connection();

    $query = 'SELECT * FROM t_user_usr WHERE usr_email = :email';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':email', strtolower($email), PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function add_user(string $nickname, string $email, string $password): int
{
    $pdo = get_database_connection();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = '
        INSERT INTO t_user_usr (
            usr_nickname,
            usr_email,
            usr_password,
            usr_account_active
        ) VALUES (
            :nickname,
            :email,
            :password,
            1
        )
    ';

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nickname', $nickname,             PDO::PARAM_STR);
    $stmt->bindValue(':email',    strtolower($email),    PDO::PARAM_STR);
    $stmt->bindValue(':password', $hashedPassword,       PDO::PARAM_STR);
    $stmt->execute();

    return (int) $pdo->lastInsertId();
}
