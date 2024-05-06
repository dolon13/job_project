<?php
    session_start();
    $email = $_SESSION['email'];
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
            <form action="php/buildcv.php" method="POST" enctype="multipart/form-data">
                <div class="form_container">
                    <div class="form_control">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter First Name..." />
                    </div>
                    <div class="form_control">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name..." />
                    </div>
                    <div class="form_control">
                        <label for="father's_name">Father's Name</label>
                        <input type="text" id="father's_name" name="father_name" placeholder="Enter Father's Name..." />
                    </div>
                    <div class="form_control">
                        <label for="email">Email: </label>
                        <label for=""><?php echo $email ?></label>
                    </div>
                    <div class="form_control">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" placeholder="Enter Contact Number..." />
                    </div>
                    <div class="form_control">
                        <label for="nationality">Nationality</label>
                        <input type="text" id="nationality" name="nationality" placeholder="Enter Nationality..." />
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
                        <textarea id="address" name="address" rows="4" cols="50" placeholder="Enter Address"></textarea>
                    </div>
                    <div class="form_control">
                        <label for="experience">Experience</label>
                        <input type="number" id="experience" name="experience" placeholder="Enter Your Experience Year..." />
                    </div>
                    <div class="form_control">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name..." />
                    </div>
                    <div class="form_control">
                        <label for="job_position">Job Position Name</label>
                        <input type="text" id="job_position" name="job_position" placeholder="Enter Job Position Name..." />
                    </div>
                    <div class="textarea_control">
                        <label for="key_achievement">Key Achievement</label>
                        <textarea id="key_achievement" name="key_achievement" rows="4" cols="50" placeholder="Write Key Achievement"></textarea>
                    </div>
                    <div class="form_control">
                        <label for="date">Date of birth</label>
                        <input type="date" id="date" name="date" />
                    </div>
                    <div class="form_control">
                        <label for="upload">Upload Your Picture</label>
                        <input type="file" id="upload" name="upload" />
                    </div>
                </div>
                <div class="button_container">
                    <button type="submit">Add To CV</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>