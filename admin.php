<?php
session_start();
if (!isset($_SESSION['user_email']) || $_SESSION['user_role'] != 'admin') {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: #333;
      text-align: center;
    }

    .container {
      background: white;
      padding: 2rem 3rem;
      border-radius: 8px;
      box-shadow: 0 6px 15px rgb(0 0 0 / 0.1);
      max-width: 400px;
      width: 100%;
    }

    h1 {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 0.2rem;
    }

    .highlight {
      color: #e35a5a;
      /* red-ish for admin */
    }

    p {
      margin: 0.5rem 0 1.5rem;
      font-size: 1rem;
    }

    p a {
      color: #e35a5a;
      text-decoration: none;
    }

    p a:hover {
      text-decoration: underline;
    }

    button {
      background-color: #e35a5a;
      color: white;
      border: none;
      padding: 0.7rem 2rem;
      font-size: 1rem;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.25s ease;
    }

    button:hover {
      background-color: #c24444;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Welcome, <span class="highlight"><?php echo $_SESSION['user_name']; ?></span></h1>
    <p>This is an <a href="#">admin</a> page</p>
    <button onclick="window.location.href='logout.php'">Logout</button>
  </div>
</body>

</html>