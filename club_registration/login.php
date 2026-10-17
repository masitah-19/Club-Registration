<?php
include 'db.php';
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Kata laluan salah!";
        }
    } else {
        $error = "Nama pengguna tidak dijumpai!";
    }
}
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Log Masuk - Pink Sports Club</title>
    <style>
        body { font-family: 'Segoe UI'; background-color: #fff0f5; margin: 0; padding: 0; }
        .login-box { max-width: 400px; margin: 80px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(255,20,147,0.2); border-top: 5px solid #ff1493; }
        h2 { color: #c71585; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #ff69b4; border-radius: 5px; box-sizing: border-box; }
        .btn { background-color: #ff1493; color: white; padding: 12px; width: 100%; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .btn:hover { background-color: #c71585; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Log Masuk Kelab</h2>
    <?php if($error != "") echo "<p class='error'>$error</p>"; ?>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label>Nama Pengguna:</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Kata Laluan:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn">Log Masuk</button>
    </form>
    <p style="text-align: center; margin-top: 15px;"><a href="index.php" style="color: #ff1493; text-decoration: none;">&larr; Laman Utama</a></p>
</div>

</body>
</html>