<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Sports Club</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #fff5f9;
    color: #4a2435;
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, #ec4899, #f9a8d4);
    color: white;
    text-align: center;
    padding: 45px 20px;
    animation: fadeDown 0.8s ease;
}

header h1 {
    font-size: 36px;
    margin-bottom: 8px;
}

nav {
    background: #be185d;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 12px;
    gap: 5px;
    position: sticky;
    top: 0;
    z-index: 10;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 9px 15px;
    border-radius: 20px;
    transition: 0.3s;
}

nav a:hover,
nav a.active {
    background: #fce7f3;
    color: #9d174d;
}

.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
}

.intro {
    text-align: center;
    margin-bottom: 30px;
    animation: fadeUp 0.8s ease;
}

.intro h2 {
    color: #be185d;
    font-size: 30px;
    margin-bottom: 10px;
}

.intro p {
    color: #9d647b;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.3fr;
    gap: 25px;
}

.contact-info,
.contact-form {
    background: white;
    padding: 28px;
    border-radius: 18px;
    box-shadow: 0 5px 20px #ec489920;
    animation: fadeUp 0.9s ease;
}

.contact-info h3,
.contact-form h3 {
    color: #be185d;
    margin-bottom: 18px;
}

.info-item {
    background: #fff5f9;
    border-radius: 12px;
    padding: 14px;
    margin-bottom: 14px;
    transition: 0.3s;
}

.info-item:hover {
    transform: translateX(5px);
    background: #fce7f3;
}

.info-item strong {
    color: #be185d;
    display: block;
    margin-bottom: 4px;
}

.info-item p {
    color: #9d647b;
    overflow-wrap: anywhere;
}

label {
    display: block;
    margin: 12px 0 5px;
    font-weight: bold;
    color: #9d174d;
}

input,
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #f3b5d1;
    border-radius: 10px;
    font-size: 15px;
    font-family: Arial, sans-serif;
    background: #fffafd;
    outline: none;
    transition: 0.3s;
}

input:focus,
select:focus,
textarea:focus {
    border-color: #ec4899;
    box-shadow: 0 0 0 3px #fce7f3;
}

textarea {
    min-height: 130px;
    resize: vertical;
}

button {
    margin-top: 18px;
    width: 100%;
    padding: 13px;
    background: #ec4899;
    color: white;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #be185d;
    transform: translateY(-3px);
}

.note {
    margin-top: 12px;
    font-size: 12px;
    color: #9d647b;
}

footer {
    margin-top: 40px;
    background: #9d174d;
    color: white;
    text-align: center;
    padding: 22px;
}

@keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
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

@media (max-width: 700px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    header h1 {
        font-size: 28px;
    }

    .container {
        margin: 20px auto;
    }
}
</style>
</head>

<body>

<header>
    <h1>💗 Contact Us</h1>
    <p>We would love to hear from you!</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="register.php">Register</a>
    <a href="contact.php" class="active">Contact Us</a>
    <a href="login.php">Login</a>
</nav>

<main class="container">

    <section class="intro">
        <h2>Get in Touch With Us 🌸</h2>
        <p>
            Have questions about our sports clubs or registration?
            Contact us using the information below or send us a message.
        </p>
    </section>

    <div class="contact-grid">

        <section class="contact-info">
            <h3>Contact Information</h3>

            <div class="info-item">
                <strong>📍 Location</strong>
                <p>Politeknik Nilai, Negeri Sembilan, Malaysia</p>
            </div>

            <div class="info-item">
                <strong>📧 Email</strong>
                <p>sportsclub@gmail.com</p>
            </div>

            <div class="info-item">
                <strong>📞 Phone</strong>
                <p>Please contact the club administrator.</p>
            </div>

            <div class="info-item">
                <strong>🕒 Operating Hours</strong>
                <p>Monday – Friday</p>
                <p>8:00 AM – 5:00 PM</p>
            </div>
        </section>

        <section class="contact-form">
            <h3>Send Us a Message 💌</h3>

            <form id="contactForm">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name"
                    placeholder="Enter your full name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email"
                    placeholder="Enter your email" required>

                <label for="subject">Subject</label>
                <select id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="Registration">Club Registration</option>
                    <option value="Sports">Sports Activities</option>
                    <option value="Membership">Membership</option>
                    <option value="Other">Other Enquiries</option>
                </select>

                <label for="message">Your Message</label>
                <textarea id="message" name="message"
                    placeholder="Write your message here..."
                    required></textarea>

                <button type="submit">Send Message 💗</button>

                <p class="note">
                    Demo form: messages are not sent or saved to a database.
                </p>
            </form>
        </section>

    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Sports Club Registration System.</p>
    <p>Made with 💗 for our sports community.</p>
</footer>

<script>
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    alert(
        "Thank you, " +
        document.getElementById("name").value +
        "! Your demo message has been checked, but it has not been sent."
    );

    this.reset();
});
</script>

</body>
</html>