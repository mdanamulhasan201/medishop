<?php
include('include/config.php');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST["upload"])) {
    $fileName = $_FILES["wordFile"]["name"];
    $fileTmpName = $_FILES["wordFile"]["tmp_name"];
    $fileContent = file_get_contents($fileTmpName);

    $stmt = $con->prepare("INSERT INTO files (filename, file_contents) VALUES (?, ?)");
    $stmt->bind_param("ss", $fileName, $fileContent);

    if ($stmt->execute()) {
        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
?>
