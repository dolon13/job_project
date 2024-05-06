<?php
    session_start();
    include("php/conn.php");
    $email = $_SESSION['email'];
    $tq = $_POST['tq'];
    $result = 0;
    for($i = 0; $i < $tq; $i++){
        $ans = $_POST[$i.'ans'];
            $cans = $_POST[$i.'cans'];
            if(strcmp($ans, $cans) == 0){
                $result++;
            }
    }
    $id = $_POST['id'];
    $query = "INSERT INTO `result`(`email`, `id`, `result`) VALUES ('$email','$id','$result')";
    $run = mysqli_query($conn, $query);
    if($run){
        $_SESSION['msg'] = "Your result is ".$result;
        header("location:home.php");
    }
    else{
        $_SESSION['msg'] = "Something wrong, try again";
        header("location:home.php");
    }
?>