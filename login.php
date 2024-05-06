<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-image: url('bg1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
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
        }
    </style>
</head>
<body>
    <div id="container">
        <form action="php/login.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Your Password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary btn-block" value="Log In"></td>
                </tr>
                <tr>
                    <td><h5 class="text-center">Don't have an account? <a href="reg.php">Registration</a></h5></td>
                </tr>
            </table>
        </form>
    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
