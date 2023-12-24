<?php

session_start();

include("connect.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST["email"];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass) && ($pass === $pass2))
    {
        $query = "INSERT INTO users(fname,lname,email,pass) VALUES('$fname','$lname','$email','$pass')";

        if(mysqli_query($conn, $query))
        {
            header("location: MedFaceCare.html");
            die;
        }
        else
        {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    else
    {
        echo "<script>alert('Please fill out all fields and make sure passwords match!')</script>";
    }
}
?>