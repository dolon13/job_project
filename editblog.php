<?php
    session_start();
    include("php/conn.php");
    $id = $_POST['id'];
    $query = "SELECT `title`, `content` FROM `blog` WHERE `id` = '$id'";
    $run = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($run);
    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $query = "UPDATE `blog` SET `title`='$title',`content`='$content' WHERE id = '$id'";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['msg'] = "Update successfully";
            header("location:adminhome.php");
        }
        else{
            $_SESSION['msg'] = "Somethign wrong, try again";
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
        <h2 style="text-align: center;">Edit your Blog Post</h2>
        <form action="editblog.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" name="title" value="<?php echo $result['title']; ?>">
            <textarea name="content" cols="30" rows="10"><?php echo $result['content']; ?></textarea>
            <input type="submit" value="Update" name="update">
        </form>
        <button type="button" onclick="back()" style="margin-top: 20px;">Home</button>
    </div>
    <script> 
        function back(){
            window.location.href = "adminhome.php";
        }
    </script>
</body>
</html>
