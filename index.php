<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Auth Form</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="container">
    <div class="card">
      <h2 id="form-title">Login</h2>

      <!-- LOGIN FORM -->
      <form action="code.php" method="post" id="login-form" class="auth-form">
        <div class="form-group">
          <input name="email" type="email" id="login-email" placeholder="Email" required />
        </div>
        <div class="form-group">
          <input name="password" type="password" id="login-password" placeholder="Password" required />
        </div>
        <button name="login" type="submit">Login</button>
      </form>

      <!-- REGISTER FORM -->
      <form action="code.php" method="post" id="register-form" class="auth-form hidden">
        <div class="form-group">
          <input name="name" type="text" id="register-name" placeholder="Full Name" required />
        </div>
        <div class="form-group">
          <input name="email" type="email" id="register-email" placeholder="Email" required />
        </div>
        <div class="form-group">
          <input name="password" type="password" id="register-password" placeholder="Password" required />
        </div>
        <div class="form-group">
          <select name="role" id="register-role" required>
            <option value="user" selected>User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <button name="register" type="submit">Registers</button>
      </form>

      <p id="toggle-text">
        Don't have an account?
        <a href="#" id="toggle-link">Register</a>
      </p>
    </div>
  </div>

  <script src="./script.js"></script>
</body>

</html>