<?php
    session_start();
    include("php/conn.php");
    $email = $_SESSION['email'];
    $query = "SELECT * FROM `cv` WHERE email = '$email'";
    $run = mysqli_query($conn, $query);
    $r = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume Builder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        body {
            background-image: url('bg2.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .apply_box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .apply_box h1 {
            text-align: center;
        }

        .form_container {
            max-width: 500px;
            margin: 0 auto;
        }

        .form_control {
            margin-bottom: 20px;
        }

        .textarea_control {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="apply_box">
            <h1>Resume Builder <span class="title_small">(CV)</span></h1>
            <form action="php/edit.php" method="POST" enctype="multipart/form-data">
                <div class="form_container">
                    <div class="form_control">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter First Name..." value="<?php echo $r['fname']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name..." value="<?php echo $r['lname']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" placeholder="Enter Contact Number..." value="<?php echo $r['number']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="nationality">Nationality</label>
                        <input type="text" id="nationality" name="nationality" placeholder="Enter Nationality..." value="<?php echo $r['nationality']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="job_role">Job Role</label>
                        <select id="job_role" name="job_role">
                            <option value="">Select Job Role</option>
                            <option value="frontend">Full Stack Developer</option>
                            <option value="backend">Data Analyst</option>
                            <option value="full_stack">Backend Developer</option>
                            <option value="ui_ux">UI UX Designer</option>
                            <option value="network_engineer">Network Engineer</option>
                            <option value="software_engineer">Software Engineer</option>
                        </select>
                    </div>
                    <div class="textarea_control">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" rows="4" cols="50" placeholder="Enter Address"><?php echo $r['address']; ?></textarea>
                    </div>
                    <div class="form_control">
                        <label for="experience">Experience</label>
                        <input type="number" id="experience" name="experience" placeholder="Enter Your Experience Year..." value="<?php echo $r['experience']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name..." value="<?php echo $r['companyname']; ?>"/>
                    </div>
                    <div class="form_control">
                        <label for="job_position">Job Position Name</label>
                        <input type="text" id="job_position" name="job_position" placeholder="Enter Job Position Name..." value="<?php echo $r['jobposition']; ?>"/>
                    </div>
                    <div class="textarea_control">
                        <label for="key_achievement">Key Achievement</label>
                        <textarea id="key_achievement" name="key_achievement" rows="4" cols="50" placeholder="Write Key Achievement"><?php echo $r['keyachivement']; ?></textarea>
                    </div>
                    <div class="form_control">
                        <label for="date">Date of birth</label>
                        <input value="2024-01-04" type="date" id="date" name="date" value="<?php echo $r['date']; ?>"/>
                    </div>
                </div>
                <div class="button_container">
                    <input type="submit" value="Edit CV" name="editcv">
                </div>
            </form>
        </div>
    </div>
</body>
</html>