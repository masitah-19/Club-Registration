<?php
include 'db.php';
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $sport_interest = $_POST['sport_interest'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $terms = isset($_POST['terms']) ? 1 : 0;

    // Masukkan ke dalam pangkalan data
    $sql = "INSERT INTO users (fullname, email, username, password, gender, sport_interest) VALUES ('$fullname', '$email', '$username', '$password', '$gender', '$sport_interest')";
    if ($conn->query($sql) === TRUE) {
        $msg = "<div class='alert success'>💖 Pendaftaran Smart Enroll Berjaya! Sila <a href='login.php'>Log Masuk</a>.</div>";
    } else {
        $msg = "<div class='alert error'>Ralat: " . $conn->error . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Enroll - Pink Sports Club</title>
    <style>
        :root {
            --pink-primary: #ff1493;
            --pink-light: #ff69b4;
            --pink-soft: #ffe4e1;
            --pink-dark: #c71585;
            --white: #ffffff;
            --text-dark: #333333;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5;
            margin: 0;
            padding: 20px;
        }
        .enroll-container {
            max-width: 600px;
            margin: 30px auto;
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(255, 20, 147, 0.2);
            border-top: 6px solid var(--pink-primary);
        }
        h2 {
            color: var(--pink-dark);
            text-align: center;
            margin-bottom: 5px;
        }
        p.subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 0.95em;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: var(--text-dark);
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ffb6c1;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
            transition: 0.3s;
        }
        input:focus, select:focus {
            border-color: var(--pink-primary);
            outline: none;
            box-shadow: 0 0 8px rgba(255, 20, 147, 0.3);
        }
        .radio-group, .checkbox-group {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-top: 5px;
        }
        .btn-enroll {
            background: linear-gradient(135deg, var(--pink-primary), var(--pink-dark));
            color: white;
            padding: 14px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(255, 20, 147, 0.4);
            transition: 0.3s;
        }
        .btn-enroll:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .alert.success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert.error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .nav-links {
            text-align: center;
            margin-top: 20px;
        }
        .nav-links a {
            color: var(--pink-primary);
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
        }
        .nav-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="enroll-container">
    <h2>Sport Club</h2>
    <p class="subtitle">Sistem Pendaftaran Pintar Ahli Baharu</p>

    <?php echo $msg; ?>

    <!-- Borang dengan lebih daripada 6 jenis input (Memenuhi syarat rubrik CIDOS) -->
    <form id="smartForm" action="register.php" method="POST" onsubmit="return validateForm()">
        
        <!-- 1. Input Text (Nama Penuh) -->
        <div class="form-group">
            <label>Nama Penuh (Seperti dalam IC):</label>
            <input type="text" name="fullname" id="fullname" placeholder="cth: Siti Aminah" required>
        </div>

        <!-- 2. Input Email -->
        <div class="form-group">
            <label>Alamat E-Mel:</label>
            <input type="email" name="email" placeholder="cth: siti@email.com" required>
        </div>

        <!-- 3. Input Text (Username) -->
        <div class="form-group">
            <label>Nama Pengguna (Username):</label>
            <input type="text" name="username" placeholder="cth: sitiaminah99" required>
        </div>

        <!-- 4. Input Password -->
        <div class="form-group">
            <label>Kata Laluan:</label>
            <input type="password" name="password" id="password" placeholder="Minima 6 aksara" required>
        </div>

        <!-- 5. Input Tel (Nombor Telefon) -->
        <div class="form-group">
            <label>Nombor Telefon Bimbit:</label>
            <input type="tel" name="phone" placeholder="cth: 0123456789" required>
        </div>

        <!-- 6. Input Date (Tarikh Lahir) -->
        <div class="form-group">
            <label>Tarikh Lahir:</label>
            <input type="date" name="dob" required>
        </div>

        <!-- 7. Input Radio (Jantina) -->
        <div class="form-group">
            <label>Jantina:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Lelaki" required> Lelaki</label>
                <label><input type="radio" name="gender" value="Perempuan" required> Perempuan</label>
            </div>
        </div>

        <!-- 8. Input Select Dropdown (Pilihan Sukan Utama) -->
        <div class="form-group">
            <label>Pilihan Kelab Sukan Utama:</label>
            <select name="sport_interest" required>
                <option value="">-- Sila Pilih Sukan --</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Netball">Netball</option>
                <option value="Football">Football</option>
                <option value="Badminton">Badminton</option>
            </select>
        </div>

        <!-- 9. Input Checkbox (Terma & Syarat) -->
        <div class="form-group">
            <div class="checkbox-group">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms" style="margin-bottom:0; font-weight:normal; font-size:0.9em;">Saya bersetuju dengan syarat dan peraturan Sports Club.</label>
            </div>
        </div>

        <button type="submit" class="btn-enroll">Daftar Smart Enroll Sekarang</button>
    </form>

    <div class="nav-links">
        <a href="index.php">&larr; Laman Utama</a> | 
        <a href="login.php">Log Masuk Akaun</a>
    </div>
</div>

<!-- JavaScript untuk Pengesahan Smart Enroll -->
<script>
function validateForm() {
    let password = document.getElementById("password").value;
    if (password.length < 6) {
        alert("⚠️ Ralat Smart Enroll: Kata laluan mestilah sekurang-kurangnya 6 aksara!");
        return false;
    }
    
    // Animasi JavaScript ringkas semasa hantar
    alert("✨ Tahniah! Data Smart Enroll anda sedang diproses ke pangkalan data.");
    return true;
}
</script>

</body>
</html>