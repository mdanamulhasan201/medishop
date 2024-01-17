<?php
require 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form with inputs for doctor_id, patient_id, and content

    $doctor_id = $_POST['doctor_id'];
    $patient_id = $_POST['patient_id'];
    $content = $_POST['content'];

    // Insert prescription into the database
    $query = "INSERT INTO prescriptions (doctor_id, patient_id, content) VALUES ('$doctor_id', '$patient_id', '$content')";

    if (mysqli_query($con, $query)) {
        echo "Prescription created successfully";
    } else {
        echo "Error creating prescription: " . mysqli_error($con);
    }
} else {
    echo "Invalid request method";
}
?>
