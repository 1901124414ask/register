<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_workshop";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


    if(!$conn ){

        echo "mysql_error($conn)";
        die();
    };
    $name=$_POST['name'];
    $email=$_POST['email'];
    $FullName=$_POST['FullName'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    // $password=$_POST['password'];
    echo "<br>";
    echo "<hr>";
    echo "<hr>";

    $insert= "INSERT INTO `profiles`(`user_name`, `email`, `Fullname`, `gender`, `password`) VALUES ('$name', '$email', '$FullName', '$gender', '$password');";

    $result =mysqli_query($conn, $insert);
    if ($result){
        echo "insertion done!";
        
    }
    else {
            echo "data not inserted!!!!!";
    }





    echo $name

    ?>