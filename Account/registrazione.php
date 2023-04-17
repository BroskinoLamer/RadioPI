<?php
    $servername = "127.0.0.1";
    $username = "lucatrinchieri";
    $password = "";
    $dbname = "my_lucatrinchieri";
    ​
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ​
    $sql = "INSERT INTO iscrizioni (Email, PassWord)
    VALUES ('John', 'Doe')";
    ​
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ​
    mysqli_close($conn);
?>