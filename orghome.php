<?php 
    session_start();
    include("php/conn.php");
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
            width: 100%;
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
    <?php include("orgheader.php"); ?>
    <section class="header">
        <h1 style="text-align: left"><?php echo $_SESSION['name']; ?></h1>
    </section>
    <section class="body">
        <div class="right">
            <h2 style="text-align: center">Circular Posted</h2>
            <!-- Content related to the reported user can be added here -->
            <table class="blog-list">
            <?php
                $email = $_SESSION['email'];
                $query = "SELECT `circularId`, `circularTitle` FROM `jobpost` WHERE email = '$email';";
                $run = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($run))
                {
            ?>
                <tr>
                    <td><?php echo $row['circularTitle']; ?></td>
                    <td>
                        <form action="applicant.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['circularId']; ?>">
                            <input type="submit" value="Applicant" name="applicant">
                        </form>
                    </td>
                    <td>
                        <form action="orghome.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['circularId']; ?>">
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
</body>
</html>
