<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="submit"] {
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="view.php" method="POST">
    </form>
    <table>
        <tr>
            <th>Job Title</th>
            <th>Operation</th>
        </tr>
        <?php
        include("conn.php");
        if(isset($_POST['submit'])) {
            $job = $_POST['job'];
            $query = "SELECT * FROM `jobpost` WHERE `type` = '$job'";
            $run = mysqli_query($conn, $query);
            while($r = mysqli_fetch_assoc($run)) {
        ?>
        <tr>
            <td><?php echo $r['circularTitle'] ?></td>
            <td>
                <form action="view.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $r['circularId'] ?>">
                    <input type="submit" value="View Details" name="search">
                </form>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>
