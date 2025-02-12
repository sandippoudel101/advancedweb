<?php
include 'db.php';
// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and sanitize to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);

    // Prepare and bind SQL statement to insert reservation into database
    $sql = "INSERT INTO reservations (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";

    // Check if the query was successful
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Reservation successful!";
    } else {
        $successMessage = "Error: " . $conn->error;
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
    <title>Reservation Form</title>
</head>
<body>
<?php include 'nav.php'; ?>
<h2> Make a Reservation </h2> <br></br>

<!-- Reservation Form -->
<form action="reservations.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required><br><br>

    <button type="submit">Reserve</button>
</form>
 
</body>
<?php include 'footer.php'; ?>

</html>
