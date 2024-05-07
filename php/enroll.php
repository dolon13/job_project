<?php
    include("conn.php");
    session_start();
    $email = $_SESSION['email'];
    $id = $_POST['id'];
    $link = $_POST['link'];
    $name = $_POST['name'];
    $query = "INSERT INTO `enroll`(`email`, `courseid`, `link`, `name`) VALUES ('$email','$id','$link', '$name')";
    $run = mysqli_query($conn, $query);
    header("location:../course.php");
?>