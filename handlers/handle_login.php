<?php
require_once __DIR__ . "/../models/user_model.php";
require_once __DIR__ . "/../core/error_manager.php";
require_once __DIR__ . "/../core/auth_manager.php";

$errors = [];
$status_msg = "";
$old_values = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_nickname = trim($_POST["login_nickname"] ?? "");
    $login_password = trim($_POST["login_password"] ?? "");

    if ($login_nickname === "") {
        $errors["login_nickname"] = "Nickname is required.";
    } elseif (!(mb_strlen($login_nickname) >= 2 && mb_strlen($login_nickname) <= 255)) {
        $errors["login_nickname"] = "Nickname must contain between 2 and 255 characters.";
    }

    if ($login_password === "") {
        $errors["login_password"] = "Password is required.";
    } elseif (!(mb_strlen($login_password) >= 8 && mb_strlen($login_password) <= 72)) {
        $errors["login_password"] = "Password must contain between 8 and 72 characters.";
    }

    if (empty($errors)) {
        try {
            $user = get_user_by_nickname($login_nickname);

            if ($user === false || !password_verify($login_password, $user["usr_password"])) {
                $status_msg = "Invalid credentials. Please check your nickname and password.";
                $old_values = [
                    "login_nickname" => $login_nickname,
                ];
            } else {
                disconnect_user();
                connect_user($user["usr_id"]);
                header('Location: ' . BASE_URL . '/profile.php');
                exit;
            }
        } catch (Exception $e) {
            handle_exception($e);
            $status_msg = "An error occurred. Please try again later.";
        }
    } else {
        $status_msg = "Please correct the errors in the form below.";
        $old_values = [
            "login_nickname" => $login_nickname,
        ];
    }
}
