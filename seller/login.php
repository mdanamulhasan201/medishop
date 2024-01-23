<?php
session_start();
include('includes/functions.php');

// Check if the user is already logged in, redirect to home if true
if (isset($_SESSION['subadmin_id'])) {
    header("Location: index.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminEmail = trim($_POST['subadmin_email']);
    $password = trim(strtolower($_POST['password']));
    $query = "SELECT  subadmin_email, subadmin_id,  password FROM subadmin WHERE subadmin_email= '$adminEmail' ";
    $data = query($query);
    if ($data == 0) {
        $error_message = "Invalid email or password. Please try again.";
    } elseif ($password == $data[0]['password'] and  $adminEmail == $data[0]['subadmin_email']) {
        $_SESSION['subadmin_id'] = $data[0]['subadmin_id'];
        post_redirect("index.php");
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
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

        <form action="login.php" method="post">
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