<?php

include("connect.php");
include("login.php");


if (isset($_POST['add'])) {
    $fname = $_SESSION["fname"];
    $email = $_SESSION['email'];
    $comment = $_POST['comment'];
    $product = $_POST['product'];


    $query = "INSERT INTO reviews (Uemail,first_name,product, review) VALUES ('$email','$fname','$product', '$comment')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Review Added!')</script>";
        header("location: productshtml.php");
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

?>