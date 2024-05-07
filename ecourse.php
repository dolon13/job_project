<?php 
    session_start();
    include("php/conn.php");
    $email = $_SESSION['email'];
    $query = "SELECT `courseid`, `link`, `name` FROM `enroll` WHERE email = '$email'";
    $run = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    </style>
</head>

<body>
    <table>
        <?php
            if(mysqli_num_rows($run) > 0){
                while($r = mysqli_fetch_assoc($run)){
        ?>
            <tr>
                <td><a href="<?php echo $r['link']; ?>"><?php echo $r['name']; ?></a></td>
                <td>
                    <form action="ecourse.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $r['courseid']; ?>">
                        <input type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php
                }

            }else{
        ?>
            <tr>
                <td>No data found</td>
                <td><a href="profile.php" class="btn btn-primary">Back</a></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
<?php
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $query ="DELETE FROM `enroll` WHERE courseid = '$id'";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['msg'] = "Delete Successfully";
            header("location:profile.php");
        }
        else{
            $_SESSION['msg'] = "Something wrong, try again";
            header("location:profile.php");
        }
    }
?>