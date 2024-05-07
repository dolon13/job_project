<?php
    session_start();
    include("php/conn.php");
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        echo "<script> alert('$msg') </script>";
        unset($_SESSION['msg']);
    }
    if(isset($_POST['next'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $nq = $_POST['nq'];
        $type = $_POST['type'];
        $query = "SELECT `id` FROM `quiz` WHERE `id` = '$id'";
        $run = mysqli_query($conn, $query);
        $r = mysqli_fetch_assoc($run);
        if($r == NULL){
            $_SESSION['qid'] = $id;
            $_SESSION['qname'] = $_POST['name'];
            $_SESSION['qnq'] = $_POST['nq'];
            $query = "INSERT INTO `quiz`(`id`, `name`, `tq`, `type`) VALUES ('$id','$name', '$nq', '$type')";
            $run = mysqli_query($conn, $query);
            header("location:setquiz.php");
        }
        else{
            $_SESSION['msg'] = "ID already exist. Please enter another ID number and try again";
            header("location:adminsetquiz.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="adminsetquiz.php" method="POST">
        <input type="text" name="id" placeholder="Enter quiz Id">
        <input type="text" name="name" placeholder="Enter quiz name">
        <select name="type" id="type" class="form-control mb-3">
            <option value="--">Select quiz type</option>
            <option value="web">Web Developer</option>
            <option value="se">Software Engineer</option>
            <option value="da">Data Analyst</option>
        </select>
        <input type="text" name="nq" placeholder="Enter total number of question">
        <input type="submit" value="Next" name="next">
    </form>
</body>
</html>
