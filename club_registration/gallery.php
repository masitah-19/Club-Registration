<?php
$sports = [
    [
        "id" => "badminton",
        "name" => "Badminton",
        "emoji" => "🏸",
        "description" => "Improve your skills, speed and teamwork.",
        "images" => ["img1.jpeg", "img2.jpeg", "img3.jpeg", "img4.jpeg", "img5.jpeg"]
    ],
    [
        "id" => "netball",
        "name" => "Netball",
        "emoji" => "🏐",
        "description" => "Build confidence and teamwork.",
        "images" => ["img6.jpeg", "img7.jpeg", "img8.jpeg", "img9.jpeg", "img10.jpeg"]
    ],
    [
        "id" => "football",
        "name" => "Football",
        "emoji" => "⚽",
        "description" => "Enjoy the game and improve your football skills.",
        "images" => ["img11.jpeg", "img12.jpeg", "img13.jpeg", "img14.jpeg", "img15.jpeg"]
    ],
    [
        "id" => "volleyball",
        "name" => "Volleyball",
        "emoji" => "🏐",
        "description" => "Play together, learn together and have fun.",
        "images" => ["img16.jpeg", "img17.jpeg", "img18.jpeg", "img19.jpeg", "img20.jpeg"]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sports Club Gallery</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, sans-serif;
    background: #fff5f9;
    color: #4a2435;
}

/* HEADER */
header {
    text-align: center;
    padding: 55px 20px;
    color: white;
    background: linear-gradient(135deg, #ec4899, #f9a8d4);
    animation: headerAnimation 1s ease;
}

header h1 {
    font-size: 38px;
    margin-bottom: 10px;
}

header p {
    color: #fff0f7;
}

/* NAVIGATION */
nav {
    background: #be185d;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 5px;
    padding: 12px;
    position: sticky;
    top: 0;
    z-index: 100;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 20px;
    transition: 0.3s;
}

nav a:hover,
nav a.active {
    background: #fce7f3;
    color: #9d174d;
}

/* INTRO */
.intro {
    text-align: center;
    padding: 40px 20px 20px;
    animation: fadeUp 1s ease;
}

.intro h2 {
    color: #be185d;
    font-size: 30px;
    margin-bottom: 10px;
}

.intro p {
    color: #9d647b;
    max-width: 650px;
    margin: auto;
    line-height: 1.7;
}

/* FILTER */
.filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    padding: 20px;
}

.filters button {
    background: white;
    color: #be185d;
    border: 1px solid #fbcfe8;
    padding: 11px 20px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.filters button:hover {
    background: #fce7f3;
    transform: translateY(-3px);
}

.filters button.active {
    background: #ec4899;
    color: white;
}

/* SPORTS SECTION */
.sport-section {
    max-width: 1200px;
    margin: 20px auto 45px;
    padding: 0 22px;
}

.sport-heading {
    background: white;
    border-left: 6px solid #ec4899;
    padding: 18px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 15px #ec489915;
}

.sport-heading h2 {
    color: #be185d;
    margin-bottom: 5px;
}

.sport-heading p {
    color: #9d647b;
}

/* IMAGE GRID */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
}

.gallery-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px #ec489920;

    opacity: 0;
    transform: translateY(35px);

    transition:
        opacity 0.7s ease,
        transform 0.7s ease,
        box-shadow 0.3s ease;
}

.gallery-card.show {
    opacity: 1;
    transform: translateY(0);
}

.gallery-card.show:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px #ec489940;
}

.image-container {
    width: 100%;
    height: 220px;
    overflow: hidden;
    background: #fce7f3;
}

.gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.5s ease;
}

.gallery-card:hover img {
    transform: scale(1.1);
}

.card-info {
    padding: 15px;
    text-align: center;
}

.card-info h3 {
    color: #be185d;
    margin-bottom: 5px;
}

.card-info p {
    color: #9d647b;
    font-size: 14px;
}

/* CONTACT CTA */
.contact-area {
    text-align: center;
    background: #fce7f3;
    padding: 40px 20px;
    margin-top: 35px;
}

.contact-area h2 {
    color: #be185d;
    margin-bottom: 10px;
}

.contact-area p {
    color: #9d647b;
    margin-bottom: 20px;
}

.contact-btn {
    display: inline-block;
    background: #ec4899;
    color: white;
    padding: 13px 28px;
    text-decoration: none;
    border-radius: 25px;
    font-weight: bold;
    transition: 0.3s;
}

.contact-btn:hover {
    background: #be185d;
    transform: translateY(-3px);
}

/* FOOTER */
footer {
    background: #9d174d;
    color: white;
    text-align: center;
    padding: 22px;
}

/* IMAGE LIGHTBOX */
.lightbox {
    position: fixed;
    inset: 0;
    background: rgba(45, 10, 28, 0.93);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
}

.lightbox.open {
    opacity: 1;
    visibility: visible;
}

.lightbox img {
    max-width: 90%;
    max-height: 80vh;
    border: 4px solid white;
    border-radius: 12px;
    transform: scale(0.8);
    transition: transform 0.3s;
}

.lightbox.open img {
    transform: scale(1);
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 25px;
    border: none;
    background: none;
    color: white;
    font-size: 42px;
    cursor: pointer;
}

/* BACK TO TOP */
#backToTop {
    position: fixed;
    right: 20px;
    bottom: 20px;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    background: #ec4899;
    color: white;
    font-size: 23px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
    z-index: 200;
}

#backToTop.visible {
    opacity: 1;
    visibility: visible;
}

/* CSS ANIMATION */
@keyframes headerAnimation {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 800px) {
    .gallery-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    header h1 {
        font-size: 30px;
    }
}

@media (max-width: 520px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .image-container {
        height: 240px;
    }

    nav a {
        padding: 8px 10px;
        font-size: 14px;
    }
}

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        transition-duration: 0.01ms !important;
    }
}
</style>
</head>

<body>

<header>
    <h1>🎀 Sports Club 🎀</h1>
    <p>Discover our sports, activities and unforgettable moments!</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="gallery.php" class="active">Gallery</a>
    <a href="register.php">Register</a>
    <a href="contact.php">Contact Us</a>
    <a href="login.php">Login</a>
</nav>

<section class="intro">
    <h2>Our Sports Activities 💗</h2>
    <p>
        Explore our sports club gallery and discover the activities we offer.
        Choose your favourite sport and join our club today!
    </p>
</section>

<div class="filters">
    <button class="active" data-filter="all">All Sports</button>
    <button data-filter="badminton">🏸 Badminton</button>
    <button data-filter="netball">🏐 Netball</button>
    <button data-filter="football">⚽ Football</button>
    <button data-filter="volleyball">🏐 Volleyball</button>
</div>

<main id="gallery">

<?php foreach ($sports as $sport): ?>

<section class="sport-section" data-section="<?= htmlspecialchars($sport['id']) ?>">

    <div class="sport-heading">
        <h2><?= $sport['emoji'] ?> <?= htmlspecialchars($sport['name']) ?></h2>
        <p><?= htmlspecialchars($sport['description']) ?></p>
    </div>

    <div class="gallery-grid">

        <?php foreach ($sport['images'] as $index => $image): ?>

        <article class="gallery-card" data-sport="<?= htmlspecialchars($sport['id']) ?>">

            <div class="image-container">
                <img
                    src="images/<?= htmlspecialchars($image) ?>"
                    alt="<?= htmlspecialchars($sport['name']) ?> activity <?= $index + 1 ?>"
                    loading="lazy"
                    onclick="openLightbox(this)"
                >
            </div>

            <div class="card-info">
                <h3><?= htmlspecialchars($sport['name']) ?> <?= $index + 1 ?></h3>
                <p>Sports Club Activity 💗</p>
            </div>

        </article>

        <?php endforeach; ?>

    </div>
</section>

<?php endforeach; ?>

</main>

<section class="contact-area">
    <h2>Have Any Questions? 💌</h2>
    <p>Want to know more about our sports club? Get in touch with us!</p>
    <a href="contact.php" class="contact-btn">Contact Us</a>
</section>

<footer>
    <p>&copy; <?= date("Y") ?> Sports Club Registration System.</p>
    <p>Made with 💗 for our sports community.</p>
</footer>

<!-- IMAGE POPUP -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button class="close-btn" onclick="closeLightbox()"
        aria-label="Close image">&times;</button>
    <img id="lightboxImage" src="" alt="Enlarged sports image"
        onclick="event.stopPropagation()">
</div>

<!-- BACK TO TOP -->
<button id="backToTop" onclick="window.scrollTo({top:0, behavior:'smooth'})"
    aria-label="Back to top">↑</button>

<script>
// 1. ANIMATE GALLERY CARDS WHEN THEY APPEAR ON SCREEN
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".gallery-card");

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(function (card) {
            observer.observe(card);
        });
    } else {
        cards.forEach(function (card) {
            card.classList.add("show");
        });
    }
});

// 2. FILTER SPORTS
const filterButtons = document.querySelectorAll(".filters button");
const sections = document.querySelectorAll(".sport-section");

filterButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        const selected = button.dataset.filter;

        filterButtons.forEach(function (btn) {
            btn.classList.remove("active");
        });
        button.classList.add("active");

        sections.forEach(function (section) {
            const showSection =
                selected === "all" || section.dataset.section === selected;

            section.style.display = showSection ? "" : "none";

            if (showSection) {
                section.querySelectorAll(".gallery-card").forEach(function (card, i) {
                    card.classList.remove("show");
                    setTimeout(function () {
                        card.classList.add("show");
                    }, i * 100);
                });
            }
        });
    });
});

// 3. OPEN IMAGE POPUP
function openLightbox(image) {
    document.getElementById("lightboxImage").src = image.src;
    document.getElementById("lightboxImage").alt = image.alt;
    document.getElementById("lightbox").classList.add("open");
    document.body.style.overflow = "hidden";
}

// 4. CLOSE IMAGE POPUP
function closeLightbox() {
    document.getElementById("lightbox").classList.remove("open");
    document.body.style.overflow = "";
}

document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        closeLightbox();
    }
});

// 5. BACK TO TOP BUTTON
const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
        backToTop.classList.add("visible");
    } else {
        backToTop.classList.remove("visible");
    }
});
</script>

</body>
</html>

