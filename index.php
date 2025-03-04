<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Nepali Restaurant</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center/cover;
            margin: 0;
            padding: 0;
            color: white;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            background: #b12704;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            padding: 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<div class="container">
    <h2>Welcome to Our Nepali Restaurant</h2>
    <p>Experience authentic Nepali cuisine with us! Enjoy delicious flavors, traditional recipes, and a warm atmosphere.</p>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </nav>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
