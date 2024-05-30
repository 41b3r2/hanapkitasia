<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brgy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$cash = $_POST["cash"];

// Insert data into the table for all rows
$sql = "UPDATE residence SET cash = cash + '$cash'";

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'alert("Successfully Insert Amount");';
    echo 'window.location.href="../admin/?page=ayuda_dashboard";';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// Close the database connection
$conn->close();

?>
