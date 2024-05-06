<?php
    session_start();
    include("conn.php");
    if(isset($_POST['search'])){
        $email = $_SESSION['email'];
        $id = $_POST['id'];
        $query = "SELECT `useremail` FROM `applicant` WHERE jobid = '$id'";
        $run = mysqli_query($conn, $query);
        $r = mysqli_fetch_assoc($run);
        if(mysqli_num_rows($run) > 0){
            $_SESSION['msg'] = "Your already apply for this post";
            header("location:../home.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            background-image: url("../bg2.png");
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            background-image: url("../bg2.png");
        }

        .content {
            flex: 1;
        }

        h1 {
            color: #343a40;
            font-size: 28px;
            margin-bottom: 10px;
        }

        h2 {
            color: #495057;
            font-size: 24px;
            margin-bottom: 10px;
        }

        h5 {
            color: #6c757d;
            font-size: 18px;
            margin-bottom: 10px;
        }

        h6 {
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 20px;
        }

        p {
            color: #343a40;
            font-size: 16px;
            line-height: 1.6;
        }

        .apply-button {
            margin-top: auto; /* Push the button to the bottom */
            align-self: flex-end; /* Align the button to the end (right) */
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <?php
                include("conn.php");
                $id = $_POST['id'];
                $_SESSION['jobid'] = $id;
                $query = "SELECT * FROM `jobpost` WHERE circularId = '$id'";
                $run = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($run);
                if ($result) {
            ?>
                    <h1>Company Name: <?php echo $result['companyName'] ?></h1>
                    <h2>Post: <?php echo $result['circularTitle'] ?></h2>
                    <h5>Skill required: <?php echo $result['skill']; ?></h5>
                    <h6>Job Description:</h6>
                    <p><?php echo $result['fullDesc'] ?></p>
            <?php
                } else {
                    echo "<p>No job found with the provided ID.</p>";
                }
            ?>
        </div>
        <div class="apply-button">
            <a href="apply.php">Apply Now</a>
        </div>
    </div>
</body>
</html>
