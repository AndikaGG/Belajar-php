<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    /* Gaya CSS untuk form */
    .form-container {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .form-input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-submit {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-submit:hover {
      background-color: #45a049;
    }

    .reset-password {
      color: #007bff;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
    }

    .reset-password:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Login Form</h2>
    <form action="process-login.php" method="post">
      <label for="username" class="form-label">Username:</label>
      <input type="text" id="username" name="username" class="form-input" required>

      <label for="password" class="form-label">Password:</label>
      <input type="password" id="password" name="password" class="form-input" required>

      <button type="submit" class="form-submit">Login</button>
    </form>

    <!-- Optional: Link untuk reset password -->
    <a href="#" class="reset-password">Forgot Password?</a>
  </div>

  <?php
    // Proses formulir login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir dan sanitasi
        $username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');

        // Contoh validasi sederhana (biasanya, Anda akan memvalidasi dengan database)
        if ($username == "user" && $password == "password") {
            echo "Login berhasil!";
        } else {
            echo "Login gagal. Silakan coba lagi.";
        }
    } else {
        // Jika ada parameter GET, tangani di sini
        if (isset($_GET['status'])) {
            $status = htmlspecialchars($_GET['status'], ENT_QUOTES, 'UTF-8');
            echo "<p>Status: $status</p>";
        }
    }
  ?>

</body>
</html>
