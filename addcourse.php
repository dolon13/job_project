<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
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
select,
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"><polygon points="6 9 0 0 12 0"></polygon></svg>');
    background-repeat: no-repeat;
    background-position: right 10px top 50%;
    padding-right: 30px;
}

    </style>
</head>
<body>
    <form action="addcourse.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter course name">
        <input type="text" name="link" id="link" placeholder="Enter course link">
        <select name="level" id="type">
            <option value="">Select level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select name="type" id="">
            <option value="">Enter course type</option>
            <option value="web">Web development</option>
            <option value="se">Software Engineering</option>
            <option value="da">Data Analist</option>
        </select>
        <input type="submit" value="Add" name="add">
    </form>
</body>
</html>
<?php 
    include("php/conn.php");
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $link = $_POST['link'];
        $type = $_POST['type'];
        $level = $_POST['level'];
        $query = "INSERT INTO `course`(`course_name`, `link`, `type`, `level`) VALUES ('$name','$link','$type','$level')";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['msg'] = "Course add successfully";
            header("location:adminhome.php");
        }else{
            $_SESSION['msg'] = "Something wrong, try again";
            header("location:adminhome.php");
        }
    }
?>