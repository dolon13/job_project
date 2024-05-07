<?php
    session_start();
    $email = $_SESSION['email'];
    include("php/conn.php");
    $query = "SELECT `id`, `title`, `content` FROM `blog` WHERE `email` = '$email'"; 
    $run = mysqli_query($conn, $query);
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        echo "<script> alert('$msg')</script>";
        unset($_SESSION['msg']);
    }
    if(isset($_POST['delete'])){
        include("php/conn.php");
        $id = $_POST['id'];
        $query = "DELETE FROM `blog` WHERE `id` = '$id'";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['msg'] = "Post deleted";
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
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: url("bg2.png");
            background-size: cover;
            min-height: 100vh;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 50px; /* Adjust according to your image size */
            margin-right: 10px;
        }

        .body {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .left {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .right {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 70%;
        }

        .divider {
            width: 1px;
            background-color: black;
            margin: 0 20px; /* Adjust the space between left and right sections */
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 200px;
        }

        button:hover {
            background-color: #0056b3;
        }
        /* table design */
        .blog-list {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.blog-list th,
.blog-list td {
    padding: 12px 15px;
    border-bottom: 1px solid #ccc;
    text-align: left;
}

.blog-list th {
    background-color: #f0f0f0;
}

.blog-list td:first-child {
    width: 70%;
}

.blog-list td form {
    display: inline;
}

.blog-list td form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
}

.blog-list td form input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <section class="header">
        <h1 style="text-align: left">Name: <?php echo $_SESSION['name']; ?></h1>
    </section>
    <section class="body">
        <div class="left">
            <button type="button" onclick="setquiz()">Set Quiz</button>
            <button type="button" onclick="blog()">Write Blog</button>
            <button type="button" onclick="course()">Add Course</button>
            <button type="button" onclick="logout()">Log Out</button>
        </div>
        <div class="divider"></div>
        <div class="right">
            <h2 style="text-align: center">My Blogs</h2>
            <!-- Content related to the reported user can be added here -->
            <table class="blog-list">
            <tr>
                <th>Title</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($run))
                {
            ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td>
                        <form action="editblog.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Edit" name="edit">
                        </form>
                    </td>
                    <td>
                        <form action="blog.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Delete" name="delete">
                        </form>
                    </td>
                </tr>
            <?php
                }
            ?>
            </table>
        </div>
    </section>
    <script>
        function logout(){
            window.location.href = "index.php";
        }
        function blog(){
            window.location.href = "blog.php";
        }
        function setquiz(){
            window.location.href = "adminsetquiz.php";
        }
        function course(){
            window.location.href = "addcourse.php";
        }
    </script>
</body>
</html>
