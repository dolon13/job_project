<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
            margin: 0; 
            padding: 0;
        }
        body{
            background-color: #DFD0B8;
        }
        .left{
            width: 30%;
            float: left;
            padding-top: 10px;
        }
        .right{
            width: 70%;
            overflow: hidden;
            padding-top: 10px;
        }
        ul{
            float: right;
            margin-right: 10px;
        }
        li{
            display: inline;
            margin-left: 30px;
        }
        a{
            text-decoration: none;
            color: #3C5B6F;
            font-weight: bold;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="left">
        <a href="home.php" style="margin-left: 10px;">InternInsight</a>
    </div>
    <div class="right">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="postJob1.php">Post Job</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="index.php">Login/Logout</a></li>
        </ul>
    </div>
</body>
</html>