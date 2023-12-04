<?php

if (isset($_GET["id"])){
    $id=$_GET["id"];
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "radiant";
    
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    $sql = "DELETE FROM admin_login WHERE id = $id";
    
      $conn->query($sql);
    
    
    }
    
    header("location: admin_show.php");
    exit;

?>