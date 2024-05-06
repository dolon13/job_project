<?php
    session_start();
    include("conn.php");
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $father = $_POST['father_name'];
    $email = $_SESSION['email'];
    $number = $_POST['contact_number'];
    $nationality = $_POST['nationality'];
    $jobrole = $_POST['job_role'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $company_name = $_POST['company_name'];
    $job_position = $_POST['job_position'];
    $key_achivement = $_POST['key_achievement'];
    $date = $_POST['date'];
    $img_name = $_FILES['upload']['name'];
    $img_name = $email.$img_name;
    $img_temName = $_FILES['upload']['tmp_name'];
    $query = "INSERT INTO `cv`(`email`, `fname`, `lname`, `father`, `number`, `nationality`, `jobrole`, `address`, `experience`, `companyname`, `jobposition`, `keyachivement`, `date`, `img`) VALUES ('$email','$fname','$lname','$father','$number','$nationality','$jobrole','$address','$experience','$company_name','$job_position','$key_achivement','$date','$img_name')";
    $folder = '../cvimage/'.$img_name;
    if(move_uploaded_file($img_temName, $folder)){
        $run = mysqli_query($conn, $query);
        header("location:../profile.php");
    }else{
        $_SESSION['msg'] = "Something wrong, try again";
        header("location:../profile.php");
    }
?>