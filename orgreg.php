<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Registration</title>
</head>
<body>
    <form action="php/orgreg.php" method="post">
        <table>
            <tr>
                <td><label for="name">Organization Name</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="email">Enter Email Address</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="pass">Enter Password</label></td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td><label for="address">Enter Address</label></td>
                <td><textarea name="address" id="address" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Registration"></td>
            </tr>
        </table>
    </form>
</body>
</html>