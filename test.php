<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Job</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url("bg2.png");
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
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
    <?php include("header.php"); ?>
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="job">Search Your Job:</label>
                <select class="form-control" name="job" id="job">
                    <option value="--">--</option>
                    <option value="web">Web Developer</option>
                    <option value="se">Software Engineer</option>
                    <option value="da">Data Analyst</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Search" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>