<html>
    <head><title> login Page</title>
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <form action="loginprocess.php" method="POST">
        <body>

        <table class="login" align="center">

        <tr>
                <td>Email</td> <td> <input placeholder="Enter Email" type="text" name="email" /></td>
        </tr>
        <tr>
            <td>Password</td> <td> <input placeholder="Enter Password" type="password" name="passwd" /></td>
        </tr>
        <tr colspan ="2">
        <td align="center"> <input type="submit" value="LOGIN" name="Login" /> </td> </tr>
        <tr colspan="2"><td>Do you have any account? <a href="createuser.php">Create an Account</td>
        </table>
        </body>
</html>