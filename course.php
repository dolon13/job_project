<?php 
    session_start();
    $email = $_SESSION['email'];
    $total_num = 0;
    include("php/conn.php");
    $query = "SELECT `result` FROM `result` WHERE email = '$email';";
    $run = mysqli_query($conn, $query);
    if(mysqli_num_rows($run) > 0){
        while($r = mysqli_fetch_assoc($run)){
            $total_num += $r['result'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bg2.png");
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        /* Centering the form */
.container {
    display: flex;
    justify-content: center;
}

/* Style for the form */
form {
    font-family: Arial, sans-serif;
}

/* Style for the select dropdown */
select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
}

/* Style for the submit button */
input[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for the submit button on hover */
input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Style for the options in the dropdown */
option {
    font-size: 16px;
}

    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <header>
        <h1>Course Enrollment</h1>
    </header>
    <div class="container">
        <form action="course.php" method="POST">
            <select name="type" id="type">
                <option value="">Select course</option>
                <option value="web">Web development</option>
                <option value="se">Software engineering</option>
                <option value="da">Data analist</option>
            </select>
            <input type="submit" value="Find" name="find">
        </form>
    </div>
    <table>
        <?php 
            if(isset($_POST['find'])){
                include("php/conn.php");
                $type = $_POST['type'];
                if($total_num <= 1000){
                    $query = "SELECT * FROM `course` WHERE type = '$type' && level = 1";
                }else if($total_num <= 2000){
                    $query = "SELECT * FROM `course` WHERE type = '$type' && level = 2";
                }else{
                    $query = "SELECT * FROM `course` WHERE type = '$type' && level = 3";
                }
                $run1 = mysqli_query($conn, $query);
                l:
                while($r = mysqli_fetch_assoc($run1)){
                    $id = $r['id'];
                    $query = "SELECT `email` FROM `enroll` WHERE courseid = '$id';";
                    $run = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($run)){
                        goto l;
                    }
        ?>
            <tr>
                <td><a href="<?php echo $r['link']; ?>"><?php echo $r['course_name']; ?></a></td>
                <td>
                    <form action="php/enroll.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                        <input type="hidden" name="link" value="<?php echo $r['link']; ?>">
                        <input type="hidden" name="name" value="<?php echo $r['course_name']; ?>">
                        <input type="submit" value="Enroll" name="enroll">
                    </form>
                </td>
            </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>
