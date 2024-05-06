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
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: red">Note: Apply for the Job</h2>
        <p style="color: red">To apply for this position, you need to attempt a quiz. Remember, you have only one chance to complete the quiz. If you minimize or change the window, your answers will be automatically submitted. Ensure a stable internet connection before starting the quiz.</p>
        <a href="quizsheet.php" class="quiz-link">Attempt Quiz</a>
        <a href="../home.php" class="quiz-link">Back to home</a>
    </div>
</body>
</html>
