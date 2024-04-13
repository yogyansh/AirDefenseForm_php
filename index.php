<?php

$name = $age = $email = $phone = $dob = $gender = $height = $idproof = $desc = " ";
$nameErr = $ageErr = $emailErr = $phoneErr = $dobErr = $genderErr = $heightErr = $idproofErr = $descErr = " ";

$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){echo "Success connecting to the db";}
$insert = false;
if(isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
        }
        if (empty($_POST["age"])) {
            $ageErr = "Age is required";
        } else {
            $age = $_POST["age"];
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone is required";
        } else {
            $phone = $_POST["phone"];
        }
        if (empty($_POST["dob"])) {
            $dobErr = "DOB is required";
        } else {
            $dob = $_POST["dob"];
        }
        if (empty($_POST["height"])) {
            $heightErr = "Height is required";
        } else {
            $height = $_POST["height"];
        }
        if (empty($_POST["idproof"])) {
            $idproofErr = "Government ID is required";
        } else {
            $idproof = $_POST["idproof"];
        }
        if (empty($_POST["desc"])) {
            $descErr = "This information is required";
        } else {
            $desc = $_POST["desc"];
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }
    }
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone`, `dob`, `gender`, `height`,`idproof`,`desc`) VALUES ('$name', '$age', '$email', '$phone', '$gender', '$height','$idproof',`$desc',', current_timestamp());";

}
if($con->query($sql) == true){
    echo "Successfully inserted";}

$con->close();