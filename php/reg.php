<?php
    include("conn.php");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $des = $_POST['des'];
        $num = $_POST['num'];
        $adds = $_POST['address'];
        $dob = $_POST['dob'];
        $img_name = $_FILES['img']['name'];
        $img_temName = $_FILES['img']['tmp_name'];
        $acctype = $_POST['acctype'];
        if($acctype == "organization"){
            $des = "N/A";
            $dob = "N/A";
        }
        $folder = '../userImages/'.$img_name;
        //sql query for insert reg data in user table
        $query = "INSERT INTO `user`(`name`, `email`, `pass`, `description`, `number`, `address`, `DOB`, `img`, `acctype`) VALUES ('$name','$email','$pass','$des','$num','$adds','$dob','$img_name', '$acctype')";
        //move image in project folder
        if(move_uploaded_file($img_temName, $folder)){
            echo "<h2>Registration Successful</h2>";
        }else{
            echo "<h2>Registration Failed</h2>";
        }
        //run sql query
        $run =  mysqli_query($conn, $query);
        if($run){
            echo "<script>alert('Registration successful')</script>";
            if(!headers_sent()){
                header("location: ../login.php");
            }
        }
        
    }
    else{
        echo "Something wrong";
    }
?>