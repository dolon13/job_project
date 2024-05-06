<?php 
    session_start();
    $acctype = $_SESSION['acctype'];
    if($acctype != "organization"){
        $_SESSION['msg'] = "You are not able to add a circular";
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('bg2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            color: #333; /* Text color for better visibility on background image */
        }
        #container {
            width: 90%;
            max-width: 800px; /* Limit container width for better readability */
            margin: auto;
            border: 1px solid black;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            margin-top: 70px; /* Add space from the top for the fixed navbar */
            min-height: 80vh; /* Minimum height to ensure content is centered vertically */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        input[type="text"], textarea {
            width: 100%;
            font-size: 16px;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc; /* Light gray border */
        }
        input[type="submit"] {
            width: 100%;
            font-size: 16px;
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include("orgheader.php"); ?>
    <div id="container">
        <h1>Enter your circular details here</h1>
        <form action="php/jobpost.php" method="POST">
            <div class="form-group">
                <select name="type" id="type" class="form-control">
                    <option value="--">Select job type</option>
                    <option value="web">Web Developer</option>
                    <option value="se">Software Engineer</option>
                    <option value="da">Data Analyst</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter circular id" name="id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter circular title" name="title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter required skill" name="skill">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter time for quiz" name="time">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter pass mark" name="mark">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter a short description" name="shortdesc">
            </div>
            <div class="form-group">
                <textarea class="form-control" cols="30" rows="10" placeholder="Enter Full description" name="fulldesc"></textarea>
            </div>
            <input type="submit" value="Next" class="btn btn-primary">
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
