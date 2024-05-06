<?php
    session_start();
    include("php/conn.php");
        $id = $_POST['id'];
        $query = "SELECT `useremail`, `name` FROM `applicant` WHERE jobid = '$id'";
        $run = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .view-details-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .view-details-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include("orgheader.php"); ?>
    <div class="container">
        <h1>Applicant List</h1>
        <table>
        <?php
            while($row = mysqli_fetch_assoc($run)){
        ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <form action="applicantdetails.php" method="POST">
                        <input type="hidden" name="email" value="<?php echo $row['useremail'] ?>">
                        <input type="submit" value="View Details" name="details">
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
