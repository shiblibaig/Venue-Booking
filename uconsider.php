<html>
<head>
    <title>
        Under Consideration
    </title>
</head>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 10-11-2015
 * Time: 20:27
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
if($_SESSION['its']==0){
    $qr = "update booking set Status = 1 where Book_ID = '$_SESSION[bid]';";
    $res = mysqli_query($con,$qr);
    $qr1 = "update booking set Prev_Use = Reason where Book_ID = '$_SESSION[bid]';";
    $res1 = mysqli_query($con,$qr1);
    $qr2 = "update venues set Status = 1 where ID = '$_SESSION[venue]';";
    $res2 = mysqli_query($con,$qr2);
}
elseif($_SESSION['its']==1){
    $qr = "update guesthouse set status = 1 where Book_ID = '$_SESSION[bid]';";
    $res = mysqli_query($con,$qr);
}

if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
header("location: http://localhost:63342/BookingApp/views/authority.php");