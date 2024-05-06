<?php
session_start();
// Retrieve quiz mark if set
$quizMark = isset($_SESSION['mark']) ? $_SESSION['mark'] : "No mark recorded";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Body and Background */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0 20px;
            background-color: #f0f0f0;
            background-image: url("bg2.png");
            background-size: cover;
            background-attachment: fixed;
            line-height: 1.6;
        }

        /* Content Styling */
        .content {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }

        /* Quiz Mark Styling */
        .quiz-mark {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }

        /* Headings and Text Styling */
        h1, h3, h4, h5 {
            color: #333;
        }
        h1 {
            margin-bottom: 0.5em;
        }
        h3 {
            color: #555;
            margin-top: 0;
        }
        h5 {
            color: #666;
            font-size: 1rem;
            margin-bottom: 1.5em;
        }

        /* Button Styling */
        input[type="submit"] {
            background: #333;
            color: #fff; 
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="content">
        <?php if(isset($_SESSION['msg'])): ?>
            <div style="background-color: #ffcccb; padding: 10px; border-left: 5px solid #f00; margin-bottom: 20px;">
                <?= $_SESSION['msg'] ?>
            </div>
            <?php unset($_SESSION['msg']); ?>
        <?php endif; ?>
        <div class="quiz-mark">
            Your Quiz Mark: <strong><?= $quizMark ?>%</strong>
        </div>
        <h1>Course Offerings</h1>
        <h5>Click the button below to view the courses we offer</h5>
        <form action="course.php" method="post">
            <input type="submit" value="View Courses">
        </form>
    </div>
</body>
</html>