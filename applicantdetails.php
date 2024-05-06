<?php
    include("php/conn.php");
    $email = $_POST['email'];
    $query = "SELECT * FROM `cv` WHERE email = '$email'";
    $run = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($run);
    $img = $r['img'];
    $img = "cvimage/".$img;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Applicant Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        body {
            font-family: Arial, sans-serif; /* Set font family */
            background-color: #f0f0f0; /* Set background color */
            padding-top: 50px; /* Add padding to the top of the body */
        }
        .container {
            background-color: #ffffff; /* Set background color of container */
            border-radius: 10px; /* Add border radius */
            padding: 20px; /* Add padding */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }
        h1 {
            text-align: center; /* Center-align the heading */
        }
        label {
            font-weight: bold; /* Make labels bold */
        }
        button {
            margin-top: 20px; /* Add margin to the top of the button */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="<?php echo $img; ?>" class="img-fluid mx-auto d-block mb-4" alt="Profile">
                <label for="">Full Name</label>
                <p><?php echo $r['fname'] . ' ' . $r['lname']; ?></p>
                <label for="">Phone Number</label>
                <p><?php echo $r['number']; ?></p>
                <label for="">Email</label>
                <p><?php echo $r['email']; ?></p>
                <label for="">Date Of Birth</label>
                <p><?php echo $r['date']; ?></p>
                <label for="">Nationality</label>
                <p><?php echo $r['nationality']; ?></p>
                <label for="">Job Role</label>
                <p><?php echo $r['jobrole']; ?></p>
                <label for="">Address</label>
                <p><?php echo $r['address']; ?></p>
                <label for="">Experience</label>
                <p><?php echo $r['experience']; ?></p>
                <label for="">Company Name</label>
                <p><?php echo $r['companyname']; ?></p>
                <label for="">Job Position</label>
                <p><?php echo $r['jobposition']; ?></p>
                <label for="">Key Achievement</label>
                <p><?php echo $r['keyachivement']; ?></p>
                <button type="button" class="btn btn-primary" onclick="back()">Back</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, if you need JavaScript features from Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function back(){
            window.location.href = "orghome.php";
        }
    </script>
</body>
</html>

