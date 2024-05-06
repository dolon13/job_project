<?php
    session_start();
    include("conn.php");
    $id = $_SESSION['circular_id'];
    if(isset($_POST['Add'])){
        $question = $_POST['question'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $ans = $_POST['ans'];
        $query = "INSERT INTO `question`(`circularId`, `question`, `A`, `B`, `C`, `D`, `ans`) VALUES ('$id','$question','$a','$b','$c','$d','$ans')";
        $run = mysqli_query($conn, $query);
        if($run){
            header("location:../question.php");
        }
        else{
            echo "something wrong";
        }
    }
    if(isset($_POST['done'])){
        header("location:../home.php");
    }
?>