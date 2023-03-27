<?php
// Retrieve form data
$first_name       = $_POST['f_name'];
$last_name        = $_POST['l_name'];
$email            = $_POST['mail'];
$password         = $_POST['password'];
$confirm_password = $_POST['c_password'];

// Check for empty fields
if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
 die("All fields are required.");
}

// Check email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 die("Invalid email format.");
}

// Check password match
if ($password != $confirm_password) {
 die("Passwords do not match.");
}

// Registration successful, display confirmation message
echo "Registration successful. Welcome, $first_name!";