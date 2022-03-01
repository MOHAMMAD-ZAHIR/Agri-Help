<?php

    // Create connection
    $conn = new mysqli('localhost', 'root', '','agrihelp');
    

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>