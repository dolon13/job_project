<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Add your CSS styles here */
        body{
            background-image: url("bg2.png");
        }
        .quiz-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .question {
            margin-bottom: 20px;
        }
        .question-text {
            font-weight: bold;
        }
        .options li {
            list-style: none;
            margin-bottom: 10px;
        }
        .submit-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: #45a049;
        }
        .tag-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .tag-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
<form action="ccheck.php" method="POST" class="quiz-form">
    <?php
        $id = $_POST['id']; // Sanitize user input
        include("php/conn.php");
        $query = "SELECT `question`, `A`, `B`, `C`, `D`, `ans` FROM `question` WHERE circularId = '$id'";
        $run = mysqli_query($conn, $query);
        $i = 0;
        $tq = 0;
        while($row = mysqli_fetch_assoc($run)){
    ?>
    <div class="question">
        <p class="question-text"><?php echo htmlspecialchars($row['question']); ?></p>
        <ul class="options">
            <?php $options = ['A', 'B', 'C', 'D']; ?>
            <?php foreach ($options as $option) : ?>
            <li>
                <input type="radio" name="<?php echo $i.'ans' ?>" id="ans<?php echo $i.'_'.$option ?>" value="<?php echo htmlspecialchars($row[$option]); ?>" required>
                <label for="ans<?php echo $i.'_'.$option ?>"><?php echo htmlspecialchars($row[$option]); ?></label>
            </li>
            <?php endforeach; ?>
        </ul>
        <!-- Hidden field for correct answer -->
        <input type="hidden" name="<?php echo $i.'cans' ?>" value="<?php echo htmlspecialchars($row['ans']); ?>">
    </div>
    <?php
        $i++;
        $tq++;
        } 
        mysqli_close($conn);
    ?>
    <input type="hidden" name="tq" value="<?php echo $tq ?>">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" value="Submit" name="submit" class="submit-button">
</form>
</body>
</html>
