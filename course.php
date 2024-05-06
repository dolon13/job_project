<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: none;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <header>
        <h1>Course Enrollment</h1>
    </header>

    <table>
        <tr>
            <th>Course Name</th>
            <th>Preview</th>
            <th>Operation</th>
        </tr>
        <?php 
        include("php/conn.php");
        $query = "SELECT * FROM `course`";
        $run = mysqli_query($conn, $query);
        while ($result = mysqli_fetch_assoc($run)) {
            $video_id = '';
            if (preg_match('/youtube\.com.*(\?v=|\/embed\/)(.{11})/', $result['link'], $matches)) {
                $video_id = $matches[2];
            } elseif (preg_match('/youtu\.be\/(.{11})/', $result['link'], $matches)) {
                $video_id = $matches[1];
            }
            $embedUrl = "https://www.youtube.com/embed/$video_id";
        ?>
        <form action="php/enroll.php" method="post">
            <tr>
                <td><?= htmlspecialchars($result['course_name']); ?></td>
                <td>
                    <!-- Embed course link in an iframe for preview -->
                    <iframe src="<?= htmlspecialchars($embedUrl); ?>" allowfullscreen></iframe>
                </td>
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <td><input type="submit" value="Enroll" name="Enroll"></td>
            </tr>
        </form>
        <?php
            }
        ?>
    </table>
</body>
</html>