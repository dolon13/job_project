<?php
    session_start();
    include("conn.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT `name`, email, pass, acctype FROM user WHERE email = '$email';";
    $result = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($result);
    if($email == $r['email']){
        if($pass == $r['pass']){
            if($r['acctype'] == 'individual'){
                $_SESSION['acctype'] = $r['acctype'];
                $_SESSION['email'] = $r['email'];
                $_SESSION['pass'] = $r['pass'];
                $_SESSION['name'] = $r['name'];
                header("location:../home.php");
            }
            else if($r['acctype'] == 'organization'){
                $_SESSION['acctype'] = $r['acctype'];
                $_SESSION['email'] = $r['email'];
                $_SESSION['pass'] = $r['pass'];
                $_SESSION['name'] = $r['name'];
                header("location:../orghome.php");
            }
            else if($r['acctype'] == 'admin'){
                $_SESSION['acctype'] = $r['acctype'];
                $_SESSION['email'] = $r['email'];
                $_SESSION['pass'] = $r['pass'];
                $_SESSION['name'] = $r['name']; 
                header("location:../adminhome.php");
            }
        }
        else{
            echo "Wrong Password";
        }
    }
    else{
        echo "Wrong Email Address";
    }
?>