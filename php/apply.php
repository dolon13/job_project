<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            background-image: url("../bg2.png")
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
            background-image: url("../bg2.png");
        }

        h2 {
            color: #343a40;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #6c757d;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .quiz-link {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .quiz-link:hover {
            background-color: #0056b3;
        }
        .submit-button {
            background-color: #4CAF50; /* Green background */
            border: none; /* Remove default border */
            color: white; /* White text color */
            padding: 15px 32px; /* Padding */
            text-align: center; /* Center align text */
            text-decoration: none; /* Remove default underline */
            display: inline-block; /* Display as inline-block */
            font-size: 16px; /* Font size */
            cursor: pointer; /* Cursor on hover */
            border-radius: 4px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition for background color */
            margin-bottom: 10px;
        }

        /* Hover effect */
        .submit-button:hover {
            background-color: #45a049; /* Darker green */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: red">Note: Apply for the Job</h2>
        <p style="color: red">To apply for this position, you need to attempt a quiz. Remember, you have only one chance to complete the quiz. If you minimize or change the window, your answers will be automatically submitted. Ensure a stable internet connection before starting the quiz.</p>
        <form action="apply.php" method="POST">
            <input type="submit" value="Attempt" name="submit" class="submit-button">
        </form>
        <a href="../home.php" class="quiz-link">Back to home</a>
    </div>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        session_start();
        include("conn.php");
        $id = $_SESSION['jobid'];
        $email = $_SESSION['email'];
        $query = "INSERT INTO `attempt`(`circularid`, `email`) VALUES ('$id','$email')";
        $run = mysqli_query($conn, $query);
        if($run){
            header("location:quizsheet.php");
        }
        else{
            $_SESSION['msg'] = "Something wrong, try again";
            header("location:../home.php");
        }
    }
?>