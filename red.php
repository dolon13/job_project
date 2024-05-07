<?php 
    include("php/conn.php");
    $id = $_POST['id'];
    $query = "SELECT `title`, `content` FROM `blog` WHERE id = '$id'";
    $run = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            background-image: url("bg2.png");
            background-size: cover;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin: 20px auto;
            width: 80%;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><?php echo $r['title']; ?></h1>
    <p><?php echo $r['content']; ?></p>
    <a href="cc.php">Back</a>
</body>
</html>