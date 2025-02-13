<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepali Restaurant | Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: black;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    
    <header>
        <h1>Welcome to Our Nepali Restaurant</h1>
        <p>Experience authentic Nepali cuisine with us!</p>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </nav>
    
    <main>
        <section>
            <h2>Discover the Taste of Nepal</h2>
            <p>Enjoy traditional Nepali dishes prepared with fresh ingredients and authentic flavors.</p>
        </section>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>
