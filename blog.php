<?php
    session_start();
    if(isset($_POST['submit'])){
        include("php/conn.php");
        $title = $_POST['title'];
        $content = $_POST['content'];
        $email = $_SESSION['email'];
        $query = "INSERT INTO `blog`(`email`, `title`, `content`) VALUES ('$email', '$title','$content')";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['msg'] = "Posted";
            header("location:adminhome.php");
        }
        else{
            $_SESSION['msg'] = "Something wrong, try again";
            header("location:adminhome.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            background-image: url("bg2.png");
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px); /* Account for border and padding */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"],
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }

        button {
            display: block;
            margin-top: 20px;
            background-color: #ccc;
        }

        button:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Create a New Blog Post</h2>
        <form action="blog.php" method="POST">
            <input type="text" name="title" placeholder="Enter title">
            <textarea name="content" cols="30" rows="10" placeholder="Enter your blog post content"></textarea>
            <input type="submit" value="Post" name="submit">
        </form>
        <button type="button" onclick="back()" style="margin-top: 20px;">Back</button>
    </div>
    <script> 
        function back(){
            window.location.href = "adminhome.php";
        }
    </script>
</body>
</html>
