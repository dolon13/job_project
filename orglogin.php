<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In(organization)</title>
</head>
<body>
    <div id="container">
        <form action="php/orgreglogin.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><input type="email" name="email" placeholder="Enter Your Email Address" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" id="pass" placeholder="Enter Your Password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Log In"></td>
                </tr>
                <tr>
                    <td><h5>Don't have account? <a href="orgreg.php">Registration</a></h5></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>