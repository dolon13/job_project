<?php 
    session_start();
    $acctype = $_SESSION['acctype'];
    if($acctype == "organization"){
        $_SESSION['msg'] = "This option is only for Individual user";
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Counseling</title>
    <style>
        /* CSS styles */
        .right, .left {
            width: 50%;
            float: left;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td form {
            display: inline;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 12px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    
    <div class="right">
        <h2>Post</h2>
        <table>
            <?php
            include("php/conn.php");
            $query = "SELECT `id`, `title` FROM `blog`";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td style="text-align: right">
                    <form action="red.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="Read" name="submit">
                    </form>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='2'>No posts found.</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
    
    <div class="left">
        <h2>Quiz</h2>
        <table>
            <?php
            include("php/conn.php");
            $email = $_SESSION['email'];
            $query = "SELECT `id`, `name` FROM `quiz`";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $query = "SELECT`email`FROM `result` WHERE id = '$id';";
                    $run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($run) > 0){
                        continue;
                    }
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td style="text-align: right">
                    <form action="ccquiz.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="Attempt" name="submit">
                    </form>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='2'>No quizzes found.</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>
