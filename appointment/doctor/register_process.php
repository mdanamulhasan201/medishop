<!-- register_process.php -->
<?php
session_start();
include("include/config.php");
error_reporting(0);

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $uname = $_POST['username'];
    $password = md5($_POST['password']);

    // Add validation and other necessary checks here

    $query = "INSERT INTO doctors (fullname, docEmail, password) VALUES ('$fullname', '$uname', '$password')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['success'] = "Registration successful. You can now login.";
        header("location:index.php");
    } else {
        $_SESSION['errmsg'] = "Registration failed. Please try again.";
        header("location:registration.php");
    }
}
?>
