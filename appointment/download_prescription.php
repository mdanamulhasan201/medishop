<?php
require 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Assuming you have a parameter in the URL for the prescription id
    $prescription_id = $_GET['prescription_id'];

    // Retrieve prescription content from the database
    $query = "SELECT content FROM prescriptions WHERE id = '$prescription_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $content = $row['content'];

        // Output the content for download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="prescription.txt"');
        echo $content;

        exit;
    } else {
        echo "Error retrieving prescription: " . mysqli_error($con);
    }
} else {
    echo "Invalid request method";
}
?>
