<?php
    include("conn.php");
    session_start();
    $email = $_SESSION['email'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $skill = $_POST['skill'];
    $time = "n/a";
    $mark = "n/a";
    $shortdesc = $_POST['shortdesc'];
    $fulldesc = $_POST['fulldesc'];
    $id = $email.$title;
    $cname = $_SESSION['name'];
    $_SESSION['circular_id'] = $id;
    $query = "INSERT INTO `jobpost`(`companyName`, `email`, `circularId`, `circularTitle`, `skill`, `shortDesc`, `fullDesc`, `type`, `time`, `mark`) VALUES ('$cname','$email','$id','$title','$skill','$shortdesc','$fulldesc','$type', '$time', '$mark')";
    $run = mysqli_query($conn, $query);
    if($run){
        header("location:../question.php");
    }
?>