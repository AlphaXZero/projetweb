<?php
$errors = [];
$status_msg = "";
$old_values = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $register_nickname = trim($_POST["register_nickname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $register_password = trim($_POST["register_password"] ?? "");
    $register_password_valid = trim($_POST["register_password_valid"] ?? "");

    if ($register_nickname === "") {
        $errors["register_nickname"] = "Nickname is required.";
    } elseif (!(mb_strlen($register_nickname) >= 2 && mb_strlen($register_nickname) <= 255)) {
        $errors["register_nickname"] = "Nickname must contain between 2 and 255 characters.";
    }
    if ($email === "") {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }
    if ($register_password === "") {
        $errors["register_password"] = "Password is required.";
    } elseif (!(mb_strlen($register_password) >= 8 && mb_strlen($register_password) <= 72)) {
        $errors["register_password"] = "Password must contain between 8 and 72 characters.";
    } elseif ($register_password !== $register_password_valid) {
        $errors["register_password"] = "Password and password confirmation must match.";
    }
    if (empty($errors)) {
        $status_msg = "Your registeration has been successfully. You can now log in";
    } else {
        $status_msg = "Please correct the errors in the form below.";
        $old_values = [
            "register_nickname" => $register_nickname,
            "email" => $email,
        ];
    }
}
