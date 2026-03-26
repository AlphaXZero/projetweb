<?php
$errors = [];
$status_msg = "";
$old_values = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_nickname = trim($_POST["login_nickname"] ?? "");
    $login_password = trim($_POST["login_password"] ?? "");

    if ($login_nickname === "") {
        $errors["login_nickname"] = "Nickanme is required.";
    } elseif (!(mb_strlen($login_nickname) >= 2 && mb_strlen($login_nickname) <= 255)) {
        $errors["login_nickname"] = "Nickname must contain between 2 and 255 characters.";
    }
    if ($login_password === "") {
        $errors["login_password"] = "Password is required.";
    } elseif ($login_password !== "" && !(mb_strlen($login_password) >= 8 && mb_strlen($login_password) <= 72)) {
        $errors["login_password"] = "Password must contain between 8 and 72 characters.";
    }
    if (empty($errors)) {
        $status_msg = "Your message has been sent successfully. Thank you!";
    } else {
        $status_msg = "Invalid credentials. Please check your username and password.";
        $old_values = [
            "login_nickname" => $login_nickname
        ];
    }
}
