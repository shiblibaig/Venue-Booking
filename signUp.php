<html>
<head>
    <title>
        Sign Up Page
    </title>
</head>
</html>
<?php
echo 'Halo';
echo 'Before Connect' . print_r($_POST, true);
$con = mysqli_connect('localhost','root','shibli');
if(!$con)
{
    die('The connection is not possible' . mysqli_errno($con));
}
echo 'After Connect: ';
mysqli_select_db($con,'sepm');
echo 'Database Selected';
session_start();
if(empty($_POST['element_1'])) die('Name is empty'.mysqli_error($con));
if(empty($_POST['element_2'])) die('ID is empty'.mysqli_error($con));
if(empty($_POST['element_3'])) die('Phone Number is empty'.mysqli_error($con));
if(empty($_POST['element_4'])) die('Password is empty'.mysqli_error($con));
printf("\n");

$qr = "insert into users values ('$_POST[element_1]','$_POST[element_2]','$_POST[element_4]',NULL,NULL,NULL,'$_POST[element_3]');";
//$res1 = mysqli_query($con,$qr);

if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
$_SESSION['name']=$_POST['element_1'];
$_SESSION['id']=$_POST['element_2'];
header("location: http://localhost:63342/BookingApp/views/choicePage.html");
mysqli_close($con);