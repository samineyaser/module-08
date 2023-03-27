<?php
// Retrieve form data
$email    = $_POST['email'];
$password = $_POST['password'];

// Check for empty fields
if (empty($email) || empty($password)) {
 die("Both fields are required.");
}

if ($email == "example@email.com" && $password == "password123") {
 // Login successful, redirect to welcome page
 header("Location: welcome.php?name=John");
 exit();
} else {
 // Invalid login credentials, display error message
 echo "Invalid email or password.";
}