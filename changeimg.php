<?php
    session_start();
    include("php/conn.php");
    if(isset($_POST['img'])){
        $img_name = $_FILES['img']['name'];
        $img_temName = $_FILES['img']['tmp_name'];
        $folder = 'userImages/'.$img_name;
        $email = $_SESSION['email'];
        $query = "UPDATE `user` SET `img`='$img_name' WHERE email = '$email'";
        if(move_uploaded_file($img_temName, $folder)){
            
        }else{
            
        }
        $run =  mysqli_query($conn, $query);
        header("location:profile.php");
    }
?>