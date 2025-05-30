<?php

session_start();
require_once 'config.php';

//register
if (isset($_POST['register'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $raw_password = $_POST['password'];
 $role = $_POST['role'];

 // Check for empty fields first
 if (empty($name) || empty($email) || empty($raw_password) || empty($role)) {
  $_SESSION['register_error'] = "All fields are mandatory";
  header("Location: index.php");
  exit();
 }

 // Check if email already exists using prepared statement
 $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
 $stmt->bind_param("s", $email);
 $stmt->execute();
 $stmt->store_result();
 if ($stmt->num_rows > 0) {
  $_SESSION['register_error'] = "Email Already Registered";
  $stmt->close();
  header("Location: index.php");
  exit();
 }
 $stmt->close();

 // Hash password only after all validations
 $password = password_hash($raw_password, PASSWORD_DEFAULT);

 // Insert new user
 $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
 $stmt->bind_param("ssss", $name, $email, $password, $role);
 $stmt->execute();
 $stmt->close();

 $_SESSION['register_success'] = "Registration successful! You can now login.";
 header("Location: index.php");
 exit();
}

//login

if (isset($_POST['login'])) {
 $email = trim($_POST['email']);
 $raw_password = $_POST['password'];

 if (empty($email) || empty($raw_password)) {
  $_SESSION['login_error'] = "Please enter both email and password";
  header("Location: index.php");
  exit();
 }

 // Prepare statement with placeholder 
 $stmt = $conn->prepare("SELECT id, name, email, password, role FROM users WHERE email = ?");
 $stmt->bind_param("s", $email);
 $stmt->execute();

 // Get result
 $result = $stmt->get_result();

 if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();

  // Verify password
  if (password_verify($raw_password, $user['password'])) {
   // Password is correct, set session variables
   $_SESSION['user_id'] = $user['id'];
   $_SESSION['user_name'] = $user['name'];
   $_SESSION['user_email'] = $user['email'];
   $_SESSION['user_role'] = $user['role'];

   // Redirect to dashboard or user/admin page
   if ($user['role'] === 'admin') {
    header("Location: admin.php");
   } else {
    header("Location: user.php");
   }
   exit();
  } else {
   $_SESSION['login_error'] = "Incorrect password";
  }
 } else {
  $_SESSION['login_error'] = "Email not found";
 }

 $stmt->close();

 header("Location: index.php");
 exit();
}
