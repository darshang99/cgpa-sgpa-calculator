<!-- connect backend mysql and frontend html-->
<?php

    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $dbname = "cgpa-sgpa-calculator";
    
    $firstName = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    // Create connection
    $conn = new mysqli($servername, $username, $password1, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO users(USER_Name,EMAIL,password) VALUES(?,?,?)");
        $stmt->bind_param("sss", $firstName, $email, $password);
        $stmt->execute();
        $message = "Please login to continue..";
        echo '<script type ="text/JavaScript">';  
        echo 'alert("JavaScript Alert Box by PHP")';  
        echo '</script>'; 
        header('Location: signin.html');
        $stmt->close();

    }
    //validate the user login details with database
   
    $conn->close();
    


?>