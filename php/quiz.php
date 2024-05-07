<?php
    session_start();
    include("conn.php");
    if(isset($_POST['set'])){ 
        $id = $_SESSION['circular_id'];
        for($i = 0; $i < 10; $i = $i + 1){
            $q = $_POST[$i.'q'];
            $a = $_POST[$i.'a'];
            $b = $_POST[$i.'b'];
            $c = $_POST[$i.'c'];
            $d = $_POST[$i.'d'];
            $ans = $_POST[$i.'ans'];
            $query = "INSERT INTO `question`(`circularId`, `question`, `A`, `B`, `C`, `D`, `ans`) VALUES ('$id','$q','$a','$b','$c','$d','$ans')";
            $run = mysqli_query($conn, $query);
        }
        unset($_SESSION['circular_id']);
        header("location:../orghome.php");
    }
?>
