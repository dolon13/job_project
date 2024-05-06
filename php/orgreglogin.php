<?php 
    include("conn.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT email, pass FROM organization WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($result);
    if($email == $r['email']){
        if($pass == $r['pass']){
            header("location:../home.php");
        }
        else{
            echo "Wrong Password";
        }
    }
    else{
        echo "Wrong Email Address";
    }
?>