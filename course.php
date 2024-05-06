<?php 
    session_start();
    $acctype = $_SESSION['acctype'];
    if($acctype == "organization"){
        $_SESSION['msg'] = "This option is only for Individual user";
        header("location: home.php");
    }
?>
<?php 
    include("php/conn.php");
    $query = "SELECT * FROM `course` WHERE 1";
    $run = mysqli_query($conn, $query);
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
        
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <header>
        <h1>Course Enrollment</h1>
    </header>

    <table>
        <tr>
            <th>Course Name</th>
            <th>Course Link</th>
            <th>Operation</th>
        </tr>
        <?php 
            while($result = mysqli_fetch_assoc($run))
            {
        ?>
        <form action="php/enroll.php" method="post">
            <tr>
                <td><?php echo $result['course_name'] ?></td>
                <td><a href="<?php echo $result['link'] ?>"><?php echo $result['link'] ?></a></td>
                <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                <input type="hidden" name="link" value="<?php echo $result['link']; ?>">
                <td><input type="submit" value="Enroll" name="Enroll"></td>
            </tr>
        </form>
        <?php
            }
        ?>
    </table>
</body>
</html>
