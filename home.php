<?php
    session_start();
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        echo "<script> alert('$msg')</script>";
        unset($_SESSION['msg']);
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
            background-color: #f0f0f0; /* Adding a background color */
            background-image: url("bg2.png");
            background-size: cover;
        }

        

        .content {
            padding: 20px;
            margin: 0 auto; /* Centering content */
            max-width: 95%; /* Limiting content width */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            color: #333;
            font-size: 20px;
            margin-bottom: 5px; /* Adding margin to separate headings */
        }

        h3 {
            color: #666;
            font-size: 18px;
            margin-bottom: 5px;
        }

        h4 {
            color: #777;
            font-size: 16px;
            margin-bottom: 5px;
        }

        h5 {
            color: #999;
            font-size: 14px;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="content">
        <table>
            <tr>
                <th>Company Name</th>
                <th>Circular Title</th>
                <th>Skill</th>
                <th>Description</th>
                <th></th> <!-- Empty header for the submit button -->
            </tr>
            <?php
            include("php/conn.php");
            $email = $_SESSION['email'];
            $query = "SELECT * FROM `jobpost` WHERE 1";
            $run = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($run)){
                $cid = $row['circularId'];
                $query = "SELECT `email` FROM `attempt` WHERE circularid = '$cid'";
                $result = mysqli_query($conn, $query);
                if($result != NULL){
                    if(mysqli_num_rows($result) > 0){
                        $r = mysqli_fetch_assoc($result);
                        if($r['email'] == $email){
                            continue;
                        }
                    }
                }
            ?>
            <tr>
                <td><h1><?php echo $row['companyName']; ?></h1></td>
                <td><h3><?php echo $row['circularTitle']; ?></h3></td>
                <td><h4><?php echo $row['skill']; ?></h4></td>
                <td><h5><?php echo $row['shortDesc']; ?></h5></td>
                <td>
                    <form action="php/view.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['circularId']; ?>">
                        <input type="submit" value="View details" name="submit">
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
