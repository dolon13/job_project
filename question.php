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
    </style>
</head>

<body>
    <div id="main">
        <div id="top">
            <h1>Set a Quiz for Candidate</h1>
        </div>
        <div id="bottom">
            <form action="php/quiz.php" method="POST">
                <div class="form-group">
                    <input type="text" name="question" placeholder="Enter question" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="text" name="a" placeholder="Enter option A" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="b" placeholder="Enter option B" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="c" placeholder="Enter option C" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="d" placeholder="Enter option D" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="ans" placeholder="Enter Correct Answer" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add / Add More" name="Add" class="btn btn-primary">
                    <input type="submit" value="Done" name="done" class="btn btn-success" style="background-color: green;margin-top: 5px;">
                </div>
            </form>
        </div>
    </div>
</body>

</html>