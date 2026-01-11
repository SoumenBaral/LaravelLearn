
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - My Website</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <h1>Contact Us</h1>
    <x-nav-links></x-nav-links>
</header>
<main>
    <section>
        <h2>Our Story</h2>
        <p>Welcome to My Website! We are dedicated to providing the best services to our customers. Our journey began in 2010 with a small team of passionate individuals.</p>
    </section>
   <form method="POST" action="/submit-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>

</main>
<footer>
    <p>&copy; 2024 My Website. All rights reserved.</p>
</footer>
</body>
</html>

