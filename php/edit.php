<?php
    if(isset($_POST['submit'])){
        session_start();
        include("conn.php");
        $email = $_SESSION['email'];
        $name = $_POST['name'];
        $des = $_POST['des'];
        $num = $_POST['num'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $query = "UPDATE `user` SET `name`='$name',`description`='$des',`number`='$num',`address`='$address',`DOB`='$dob' WHERE email = '$email'";
        $run = mysqli_query($conn, $query);
        header("location:../index.php");
    }
    if(isset($_POST['editcv'])){
        session_start();
        include("conn.php");
        $email = $_SESSION['email'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $number = $_POST['contact_number'];
        $nationality = $_POST['nationality'];
        $jobrole = $_POST['job_role'];
        $address = $_POST['address'];
        $experience = $_POST['experience'];
        $company_name = $_POST['company_name'];
        $job_position = $_POST['job_position'];
        $key_achivement = $_POST['key_achievement'];
        $date = $_POST['date'];
        $query = "UPDATE `cv` SET `fname`='$fname',`lname`='$lname',`number`='$number',`nationality`='$nationality',`jobrole`='$jobrole',`address`='$address',`experience`='$experience',`companyname`='$company_name',`jobposition`='$job_position',`keyachivement`='$key_achivement',`date`='$date' WHERE email = '$email'";
        $run = mysqli_query($conn, $query);
        header("location:../index.php");
    }
?>