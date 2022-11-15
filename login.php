<?php

    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $dbname = "cgpa-sgpa-calculator";
    
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    // Create connection
    $conn = new mysqli($servername, $username, $password1, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM users WHERE EMAIL = '$email' and  password = '$password'";
        $result = mysqli_query($conn,$sql);
        $count =mysqli_num_rows($result);

        if($count>0){
            header('Location: indexF.html');
        }
        else{
            echo '<script type="text/javascript">';
            echo ' alert("check Your email or password")';  //not showing an alert box.
            echo '</script>';
        }
    }
    $conn->close();