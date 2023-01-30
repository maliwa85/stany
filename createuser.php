<html>
    <head><title> login Page</title>
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <form action="" method="POST">
        <body>

        <table class="login" align="center">

        <tr>
                <td>FIRST NAME</td> <td> <input placeholder="Enter Email" type="text" name="firstname" /></td>
        </tr>
        <tr>
            <td>LAST NAME</td> <td> <input placeholder="Enter Password" type="password" name="lastname" /></td>
        </tr>

        <tr>
                <td>AGE</td> <td> <input placeholder="Enter Email" type="text" name="age" /></td>
        </tr>
        <tr>
            <td>GENDER</td> <td> <input placeholder="Enter Password" type="password" name="gender" /></td>
            
        </tr>

        <tr>
                <td>PHONE</td> <td> <input placeholder="Enter Email" type="text" name="phone" /></td>
        </tr>
        <tr>
            <td>EMAIL</td> <td> <input placeholder="Enter Password" type="password" name="email" /></td>
        </tr>

        <tr>
                <td>CITY</td> <td> <input placeholder="Enter Email" type="text" name="city" /></td>
        </tr>
       

        <tr colspan ="2">
        <td align="center"> <input type="submit" value="REGISTER" name="register" /> </td> </tr>
        
        </table>
        
        </form>
        <?php
if(isset(register)){ $firstname =$_POST['fname'];
$lastname =$_POST['lname'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$city =$_POST['city'];

$hostname ="localhost";
$username ="root";
$password ="";
$db ="maliwa";

$conn = mysqli_connect($hostname, $username, $password, $db) or die();
$INSERT INTO createuser (id, firstname, lastname,age, gender, phone, email, city) VALUES (, $firstname, $lastname, $age, $gender, $phone, $email, $city);
mysqli_query($conn, $insert) or die();  
}


?>
    
        </body>

</html>