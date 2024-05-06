<?php
    session_start();
    include("php/conn.php");
    $nq = $_SESSION['qnq'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="setquiz.php" method="POST">
        <?php
            for($i = 0; $i < $nq; $i++){
        ?>
            <input type="text" name="<?php echo $i.'q' ?>" placeholder="Question <?php echo $i+1 ?>" required>
            <input type="text" name="<?php echo $i.'a' ?>" placeholder="Option A" required>
            <input type="text" name="<?php echo $i.'b' ?>" placeholder="Option B" required>
            <input type="text" name="<?php echo $i.'c' ?>" placeholder="Option C" required>
            <input type="text" name="<?php echo $i.'d' ?>" placeholder="Option D" required>
            <input type="text" name="<?php echo $i.'ans' ?>" placeholder="Correct Answer" required>
        <?php
            } 
        ?>
        <input type="submit" value="Set" name="set">
    </form>
</body>
</html>
<?php
    if(isset($_POST['set'])){ 
        $id = $_SESSION['qid'];
        $name = $_SESSION['qname'];
        $nq = $_SESSION['qnq'];
        for($i = 0; $i < $nq; $i = $i + 1){
            $q = $_POST[$i.'q'];
            $a = $_POST[$i.'a'];
            $b = $_POST[$i.'b'];
            $c = $_POST[$i.'c'];
            $d = $_POST[$i.'d'];
            $ans = $_POST[$i.'ans'];
            $query = "INSERT INTO `question`(`circularId`, `question`, `A`, `B`, `C`, `D`, `ans`) VALUES ('$id','$q','$a','$b','$c','$d','$ans')";
            $run = mysqli_query($conn, $query);
        }
        unset($_SESSION['qid']);
        unset($_SESSION['qname']);
        unset($_SESSION['qnq']);
        header("location:adminhome.php");
    }
?>
