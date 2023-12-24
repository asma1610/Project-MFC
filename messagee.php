<?php

include("login.php");

$email = $_SESSION['email'];
$fname = $_SESSION['fname'];

if (isset($_POST['send'])) {
   
    $mess = $_POST['Q'];

        $query = "INSERT INTO messages  VALUES ('$email','$fname', '$mess')";


        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Message sent! We will respond as soon as possible')</script>";
            
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }

} 
else 
{
        echo "<script>alert('Something went wrong')</script>";
}
header("location: loggedhtml.php");


?>
