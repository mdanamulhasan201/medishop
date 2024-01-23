<?php
// Establish a connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anamul_pharmeasy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $subadmin_email = $_POST['subadmin_email'];
    $subadmin_name = $_POST['subadmin_name'];
    $subadmin_lname = $_POST['subadmin_lname'];
    $password = $_POST['password'];

    // Insert data into the database
    $sql = "INSERT INTO subadmin (subadmin_email, subadmin_name, subadmin_lname, password)
            VALUES ('$subadmin_email', '$subadmin_name', '$subadmin_lname', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the home page after successful registration
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h2 class="mb-4">Seller Registration Form</h2>
        <form action="registration.php" method="post">
            <div class="mb-3">
                <label for="subadmin_email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="subadmin_email" required>
            </div>

            <div class="mb-3">
                <label for="subadmin_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="subadmin_name" required>
            </div>

            <div class="mb-3">
                <label for="subadmin_lname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="subadmin_lname" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <p class="mt-3">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
