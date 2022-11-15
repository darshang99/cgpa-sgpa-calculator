<?php

    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $dbname = "cgpa-sgpa-calculator";
    
    $usn = $_POST['usn'];
    $
    // Create connection
    $conn = new mysqli($servername, $username, $password1, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }