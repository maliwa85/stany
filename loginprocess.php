<?php
$form_email = $_POST['email'];
$password = $_POST['passwd'];

/*
echo "Email is: ".$form_email;
echo "</br>";
echo "Your Password is: ".$password;*/
$hostname ="localhost";
$username ="root";
$password ="";
$db ="maliwa";

$conn = mysqli_connect($hostname, $username, $password, $db) or die();

$select = "SELECT * FROM login WHERE email ='$form_email";

$qr = mysqli_query($conn,$select);

$count = mysqli_num_rows($qr);

echo "$count";
 echo "</br>";
while ($demo = mysqli_fetch_array($qr))
{

$email=$demo['email'];
$password=$demo['password'];
$status=$demo['status'];
$ldate=$demo['logindate'];

echo "$email, $password, $status, $date";
echo "</br>";
}
if ($password != $password)
{
    header("location:login.php?invalid login");
    exit;
}
else
  /*echo "Sucessfully Login";*/
  header("location:admin.php");

?>