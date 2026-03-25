<?php
$errors = [];
$status_msg = "";
$old_values = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = trim($_POST["fname"] ?? "");
    $lname = trim($_POST["lname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($fname === "") {
        $errors["fname"] = "First name is required.";
    } elseif (!(mb_strlen($fname) >= 2 && mb_strlen($fname) <= 255)) {
        $errors["fname"] = "First name must contain between 2 and 255 characters.";
    }
    if ($lname !== "" && !(mb_strlen($lname) >= 2 && mb_strlen($lname) <= 255)) {
        $errors["lname"] = "Last name must contain between 2 and 255 characters.";
    }
    if ($email === "") {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }
    if ($message === "") {
        $errors["message"] = "Message is required.";
    } elseif (!(mb_strlen($message) >= 10 && mb_strlen($message) <= 3000)) {
        $errors["message"] = "Message must contain between 10 and 3000 characters.";
    }
    if (empty($errors)) {
        $status_msg = "Your message has been sent successfully. Thank you!";
    } else {
        $status_msg = "Please correct the errors in the form below.";
        $old_values = [
            "fname" => $fname,
            "lname" => $lname,
            "email" => $email,
            "message" => $message,
        ];
    }
}
