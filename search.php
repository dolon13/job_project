<?php 
    session_start();
    $acctype = $_SESSION['acctype'];
    if($acctype == "organization"){
        $_SESSION['msg'] = "This option is only for Individual user";
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url("bg2.png");
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Form styles */
        .content {
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div class="content">
        <h1>Find Job</h1>
        <form action="php/search.php" method="POST">
            <table>
                <tr>
                    <td><label for="job">Search Your Job: </label></td>
                    <td>
                        <select name="job" id="job">
                            <option value="--">--</option>
                            <option value="web">Web Developer</option>
                            <option value="se">Software Engineer</option>
                            <option value="da">Data Analyst</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Search" name="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
