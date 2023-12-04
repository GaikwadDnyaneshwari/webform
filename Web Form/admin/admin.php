<?php

// Database connection
$servername = "localhost";
$username = "theradiantitserv_theradiantitser";
$password = "Jupiter@45";
$dbname = "theradiantitserv_student";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO admin_login (first_name, last_name,email, password) VALUES (?, ?, ?, ?)");
// Bind the parameters to the statement
$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);



// Retrieve the form data
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];



// Execute the statement and check for success
if ($stmt->execute()) {
    echo "Admin user created successfully!.";
    header("location: admin_show.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>
