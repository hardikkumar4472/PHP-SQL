<?php
$server = "localhost";
$username = "root";
$password = "";
$db="trip";
$con = mysqli_connect($server, $username, $password,$db);
if(!$con){
    echo "Success connecting to the db";
}
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="trip";
}
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$db);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    $con->close();
    ?>