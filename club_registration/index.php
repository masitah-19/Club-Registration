<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sports Club - Laman Utama</title>
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
            margin: 0;
            padding: 0;
            background-color: #fff0f5;
            color: var(--text-dark);
        }
        header {
            background: linear-gradient(135deg, var(--pink-primary), var(--pink-dark));
            color: var(--white);
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(255, 20, 147, 0.3);
        }
        nav {
            background-color: var(--white);
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav a {
            text-decoration: none;
            color: var(--pink-primary);
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 20px;
            transition: 0.3s;
        }
        nav a:hover {
            background-color: var(--pink-primary);
            color: var(--white);
            transform: translateY(-2px);
        }
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(rgba(199, 21, 133, 0.6), rgba(199, 21, 133, 0.6)), url('images/img1.jpeg') no-repeat center center/cover;
            color: white;
            position: relative;
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 { font-size: 3em; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); }
        .btn {
            background-color: var(--pink-light);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(255, 105, 180,.4);
        }
        .btn:hover { background-color: var(--pink-primary); transform: scale(1.05); }
        .container { max-width: 1200px; margin: auto; padding: 40px 20px; }
        .section-title { text-align: center; color: var(--pink-dark); margin-bottom: 30px; font-size: 2em; }
        
        /* Gallery Grid - 20 Images */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }
        .gallery-item {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background: white;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover { transform: scale(1.03); }
        .gallery-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }
        footer {
            background-color: var(--pink-dark);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Sports Club</h1>
    <p>Volleyball | Netball | Football | Badminton</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="register.php">Register</a>
    <a href="contact.php">Contact Us</a>
    <a href="login.php">Login</a>
</nav>

<div class="hero">
    <div class="hero-content">
        <h1>Gaya Hidup Sihat & Cergas</h1>
        <p>Sertai kelab sukan eksklusif bertema pink kami hari ini!</p>
        <a href="register.php" class="btn">Daftar Sekarang</a>
    </div>
</div>

<div class="container" id="gallery">
    <h2 class="section-title">Galeri Sukan Kami (20 Gambar Aktiviti)</h2>
    <div class="gallery-grid">
        <!-- Gambar 1 -->
        <div class="gallery-item">
            <img src="images/img1.jpeg" alt="Aktiviti Sukan 1" onerror="this.src='https://picsum.photos/seed/sport1/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Volleyball #1</div>
        </div>
        <!-- Gambar 2 -->
        <div class="gallery-item">
            <img src="images/img2.jpeg" alt="Aktiviti Sukan 2" onerror="this.src='https://picsum.photos/seed/sport2/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Netball #2</div>
        </div>
        <!-- Gambar 3 -->
        <div class="gallery-item">
            <img src="images/img3.jpeg" alt="Aktiviti Sukan 3" onerror="this.src='https://picsum.photos/seed/sport3/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Football #3</div>
        </div>
        <!-- Gambar 4 -->
        <div class="gallery-item">
            <img src="images/img4.jpeg" alt="Aktiviti Sukan 4" onerror="this.src='https://picsum.photos/seed/sport4/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Badminton #4</div>
        </div>
        <!-- Gambar 5 -->
        <div class="gallery-item">
            <img src="images/img5.jpeg" alt="Aktiviti Sukan 5" onerror="this.src='https://picsum.photos/seed/sport5/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Volleyball #5</div>
        </div>
        <!-- Gambar 6 -->
        <div class="gallery-item">
            <img src="images/img6.jpeg" alt="Aktiviti Sukan 6" onerror="this.src='https://picsum.photos/seed/sport6/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Netball #6</div>
        </div>
        <!-- Gambar 7 -->
        <div class="gallery-item">
            <img src="images/img7.jpeg" alt="Aktiviti Sukan 7" onerror="this.src='https://picsum.photos/seed/sport7/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Football #7</div>
        </div>
        <!-- Gambar 8 -->
        <div class="gallery-item">
            <img src="images/img8.jpeg" alt="Aktiviti Sukan 8" onerror="this.src='https://picsum.photos/seed/sport8/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Badminton #8</div>
        </div>
        <!-- Gambar 9 -->
        <div class="gallery-item">
            <img src="images/img9.jpeg" alt="Aktiviti Sukan 9" onerror="this.src='https://picsum.photos/seed/sport9/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Volleyball #9</div>
        </div>
        <!-- Gambar 10 -->
        <div class="gallery-item">
            <img src="images/img10.jpeg" alt="Aktiviti Sukan 10" onerror="this.src='https://picsum.photos/seed/sport10/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Netball #10</div>
        </div>
        <!-- Gambar 11 -->
        <div class="gallery-item">
            <img src="images/img11.jpeg" alt="Aktiviti Sukan 11" onerror="this.src='https://picsum.photos/seed/sport11/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Football #11</div>
        </div>
        <!-- Gambar 12 -->
        <div class="gallery-item">
            <img src="images/img12.jpeg" alt="Aktiviti Sukan 12" onerror="this.src='https://picsum.photos/seed/sport12/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Badminton #12</div>
        </div>
        <!-- Gambar 13 -->
        <div class="gallery-item">
            <img src="images/img13.jpeg" alt="Aktiviti Sukan 13" onerror="this.src='https://picsum.photos/seed/sport13/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Volleyball #13</div>
        </div>
        <!-- Gambar 14 -->
        <div class="gallery-item">
            <img src="images/img14.jpeg" alt="Aktiviti Sukan 14" onerror="this.src='https://picsum.photos/seed/sport14/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Netball #14</div>
        </div>
        <!-- Gambar 15 -->
        <div class="gallery-item">
            <img src="images/img15.jpeg" alt="Aktiviti Sukan 15" onerror="this.src='https://picsum.photos/seed/sport15/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Football #15</div>
        </div>
        <!-- Gambar 16 -->
        <div class="gallery-item">
            <img src="images/img16.jpeg" alt="Aktiviti Sukan 16" onerror="this.src='https://picsum.photos/seed/sport16/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Badminton #16</div>
        </div>
        <!-- Gambar 17 -->
        <div class="gallery-item">
            <img src="images/img17.jpeg" alt="Aktiviti Sukan 17" onerror="this.src='https://picsum.photos/seed/sport17/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Volleyball #17</div>
        </div>
        <!-- Gambar 18 -->
        <div class="gallery-item">
            <img src="images/img18.jpeg" alt="Aktiviti Sukan 18" onerror="this.src='https://picsum.photos/seed/sport18/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Netball #18</div>
        </div>
        <!-- Gambar 19 -->
        <div class="gallery-item">
            <img src="images/img19.jpeg" alt="Aktiviti Sukan 19" onerror="this.src='https://picsum.photos/seed/sport19/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Football #19</div>
        </div>
        <!-- Gambar 20 -->
        <div class="gallery-item">
            <img src="images/img20.jpeg" alt="Aktiviti Sukan 20" onerror="this.src='https://picsum.photos/seed/sport20/400/300'">
            <div style="padding: 10px; text-align: center; font-size: 0.9em; font-weight: bold; color: #c71585;">Badminton #20</div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2026 Sports Club. Hak Cipta Terpelihara.</p>
</footer>

</body>
</html>