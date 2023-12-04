<?php

if (isset($_GET["id"])){
$id=$_GET["id"];

$servername = "localhost";
$username = "theradiantitserv_theradiantitser";
$password = "Jupiter@45";
$dbname = "theradiantitserv_student";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM students_form WHERE id = $id";

  $conn->query($sql);


}

header("location: student-registered.php");
exit;




?>

