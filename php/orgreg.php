<?php 
    include("conn.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $acctype = "organization";
    $query = "INSERT INTO `organization`(`name`, `email`, `pass`, `address`) VALUES ('$name','$email','$pass','$address')";
    $run = mysqli_query($conn, $query);
    if($run){
        header("location:../login.php");
    }

    else{
        echo "Somethig Wrong, Please try aganin"; 
    }
?>