<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $rating = (int) $_POST['rating']; // Convert rating to integer
    $comments = $conn->real_escape_string($_POST['comments']);

    $sql = "INSERT INTO feedback (name, email, rating, comments) 
            VALUES ('$name', '$email', '$rating', '$comments')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Thank you for your feedback!";
    } else {
        $_SESSION['message'] = "Error: " . $conn->error;
    }
    header("Location: feedback.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'nav.php'; ?>

<h2>Customer Feedback</h2>

<?php if (isset($_SESSION['message'])): ?>
    <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
<?php endif; ?>

<form action="feedback.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="rating">Rating (1 to 5):</label>
    <select id="rating" name="rating" required>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Good</option>
        <option value="4">4 - Very Good</option>
        <option value="5">5 - Excellent</option>
    </select><br><br>

    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments" required></textarea><br><br>

    <button type="submit">Submit Feedback</button>
</form>

</body>
<?php include 'footer.php'; ?>
</html>
