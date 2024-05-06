<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-image: url('bg1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    
    <div id="container">
        
        <form action="php/reg.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td colspan='2' style="color: red;">Note: For Register a organization filup only name, email, password, address, number fild and add organization pic. other filed will remain blank.</td>
                </tr>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" id="name" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td><input type="password" name="pass" id="pass" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="des">Description:</label></td>
                    <td><textarea name="des" id="des" cols="20" rows="5" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><label for="num">Number:</label></td>
                    <td><input type="text" name="num" id="num" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><textarea name="address" id="address" cols="20" rows="5" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" name="dob" id="dob" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="img">Profile:</label></td>
                    <td><input type="file" name="img" id="img" class="form-control-file"></td>
                </tr>
                <tr>
                    <td><label for="acctype">Account type:</label></td>
                    <td>
                        <select name="acctype" id="acctype" class="form-control">
                            <option value="">--</option>
                            <option value="individual">Individual</option>
                            <option value="organization">Organization</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Registration" name="submit" class="btn btn-primary btn-block"></td>
                </tr>
                
            </table>
        </form>
        
    </div>

   

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
