<?php 
    include("php/conn.php");
    session_start();
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        echo "<script> alert('$msg')</script>";
        unset($_SESSION['msg']);
    }
    $email = $_SESSION['email'];
    $query = "SELECT `img` FROM `user` WHERE email = '$email'";
    $run = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($run);
    $img = 'userImages/'.$result['img'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | InternInsight</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('bg2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333; /* Text color for better visibility on background image */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 0;
        }
        .profile-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .profile-pic {
            flex: 0 0 40%;
            margin-right: 20px;
        }
        .profile-pic img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .profile-options {
            flex: 0 0 50%;
        }
        .profile-options h2 {
            margin-bottom: 20px;
        }
        .btn-group {
            margin-bottom: 20px;
        }
        .quiz-info {
            margin-top: 50px;
        }
        img{
            width: 150px;
            height: 150px;
        }
        table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="profile-section">
            <div class="profile-pic">
                <img src="<?php echo $img ?>" alt="Profile Picture" style="width: 150px; height: 150px;">
                <h2>Name: <?php echo $_SESSION['name']; ?></h2>
                <form action="changeimg.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-3">
                        <input type="file" name="img" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="img">Change Profile picture</button>
                    </div>
                </form>
            </div>
            <div class="profile-options">
                <h2>Profile Options</h2>
                <div class="btn-group">
                    <a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
                    <a href="buildcv.php" class="btn btn-primary">Build CV</a>
                    <a href="editcv.php" class="btn btn-primary">Edit CV</a>
                </div>
            </div>
        </div>
        <div class="quiz-info">
            <h2>Quiz Information</h2>
            <?php 
                $query = "SELECT `id`, `result` FROM `result` WHERE email = '$email'";
                $run = mysqli_query($conn, $query);
            ?>
            <p><strong>Quizzes Attempted: </strong><?php echo mysqli_num_rows($run); ?></p>
            <p><strong>Dashboard:</strong></p>
            <table>
                <tr>
                    <th>Quiz Name</th>
                    <th>Result</th>
                    <th>Total question</th>
                </tr>
                <?php 
                    while($result = mysqli_fetch_assoc($run)){
                        $id = $result['id'];
                        $query2 = "SELECT `name`, `tq` FROM `quiz` WHERE id = '$id'";
                        $run2 = mysqli_query($conn, $query2);
                        $r = mysqli_fetch_assoc($run2);
                ?>
                    <tr>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $result['result']; ?></td>
                        <td><?php echo $r['tq']; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
