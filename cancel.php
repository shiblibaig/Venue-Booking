<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 11-11-2015
 * Time: 01:10
 */
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
//rejection comes in var rej
//reject.php brings details here.
$qr = "Update booking set reason_of_reject = $_POST[rej] where ID = '$_SESSION[id]'; ";
$res1 = mysqli_query($con,$query);
header("location: http://localhost:63342/BookingApp/views/choicePage.html");
//Going to the authority page!
if(!mysqli_query($con,$query)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
header("location: http://localhost:63342/BookingApp/views/choicePage.html");