<?php
    include("conn.php");
    session_start();
    $email = $_SESSION['email'];
    $id = $_SESSION['jobid'];
    $result = 0;
    for($i = 0; $i < $_SESSION['tq']; $i++){
        $ans = $_POST[$i.'ans'];
        $cans = $_POST[$i.'cans'];
        if(strcmp($ans, $cans) == 0){
            $result++;
        }
    }
    $pass = (80/100) * $_SESSION['tq'];
    echo $id;
    echo $email;
    if($result >= $pass){
        $query = "INSERT INTO `applicant`(`jobid`, `useremail`) VALUES ('$id','$email')";
        $run = mysqli_query($conn, $query);
        $_SESSION['msg'] = "Your Application is submitted";
        header("location:../home.php");
    }
    else{
        $_SESSION['msg'] = "You are not eligible for the post";
        header("location:../home.php");
    }
?>