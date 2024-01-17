<?php
include('include/config.php');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = $con->query("SELECT filename, file_contents FROM files ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    header("Content-Disposition: inline; filename=" . $row["filename"]);
    echo $row["file_contents"];
} else {
    echo "No files found.";
}

$con->close();
?>
