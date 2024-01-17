<?php
session_start();
include('includes/functions.php');

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "PharmEasy";

// Check if the user is already logged in, redirect to home if true
if (isset($_SESSION['subadmin_id'])) {
    header("Location: index.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST['subadmin_email'];
    $password = $_POST['password'];

    // Establish a connection to your database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform login validation, replace this with your actual validation logic
    if (login($conn, $user_email, $password)) {
        // Redirect to home page after successful login
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Login</h2>

        <?php
        if (isset($error_message)) {
            echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
        }
        ?>

        <form action="login.php" method="post" >
            <div class="mb-3">
                <label for="subadmin_email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="subadmin_email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p class="mt-3">Don't have an account? <a href="registration.php">Register here</a></p>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
