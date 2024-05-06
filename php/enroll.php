<?php
    include("conn.php");
    session_start();
    $email = $_SESSION['email'];
    $id = $_POST['id'];
    $link = $_POST['link'];
    $query = "INSERT INTO `enroll`(`email`, `courseid`, `link`) VALUES ('$email','$id','$link')";
    $run = mysqli_query($conn, $query);
    header("location:../course.php");
?>