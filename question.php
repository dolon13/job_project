<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set A Quiz</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url("bg2.png");
            margin: 0;
            padding: 0;
        }

        #main {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #top {
            text-align: center;
            margin-bottom: 30px;
        }

        #bottom {
            padding: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .container{
            width: 50%;
            height: auto;
            margin: auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<div class="container">
<form action="php/quiz.php" method="POST">
        <?php
            for($i = 0; $i < 10; $i++){
        ?>
            <input type="text" name="<?php echo $i.'q' ?>" placeholder="Question <?php echo $i+1 ?>" required>
            <input type="text" name="<?php echo $i.'a' ?>" placeholder="Option A" required>
            <input type="text" name="<?php echo $i.'b' ?>" placeholder="Option B" required>
            <input type="text" name="<?php echo $i.'c' ?>" placeholder="Option C" required>
            <input type="text" name="<?php echo $i.'d' ?>" placeholder="Option D" required>
            <input type="text" name="<?php echo $i.'ans' ?>" placeholder="Correct Answer" required>
        <?php
            } 
        ?>
        <input type="submit" value="Set" name="set">
    </form>
</div>
</body>
</html>
