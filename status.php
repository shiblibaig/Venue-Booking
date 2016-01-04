<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 10-11-2015
 * Time: 22:05
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
$ven = $row1 = 0 ;
$qr1 = "select count(*) from booking where ID = '$_SESSION[id]';";
$res1 = mysqli_query($con,$qr1);
$row = mysqli_fetch_row($res1);
if($row[0]==1){
    $qr = "select * from booking where ID = '$_SESSION[id]'; ";
    $res1 = mysqli_query($con,$qr);
    $row1 = mysqli_fetch_row($res1);
    $ven = $row1[2];
}
else{
    $qr1 = "select count(*) from guesthouse where ID = '$_SESSION[id]';";
    $res1 = mysqli_query($con,$qr1);
    $row = mysqli_fetch_row($res1);
    if($row[0]==1){
        $qr = "select * from guesthouse where ID = '$_SESSION[id]'; ";
        $res1 = mysqli_query($con,$qr);
        $row1 = mysqli_fetch_row($res1);
        $ven = 6;
    }
    else{
        header("location: http://localhost:63342/BookingApp/views/choicePage.html");
    }
}

$_SESSION['venue']=$row1[1];
$s = $row1[7];
if($ven==2){
        $_SESSION['venue']='SAC';
}
elseif($ven==1){
    $_SESSION['venue']='Big Lecture Theater';
}
elseif($ven==3){
    $_SESSION['venue']='Small Lecture Theater';
}
elseif($ven==4){
    $_SESSION['venue']='Computer Programming Lab';
}
elseif($ven==5){
    $_SESSION['venue']='Electronics Lab';
}
elseif($ven==6){
    $_SESSION['venue']='Guest House';
}
if($s==0){
    $status = 'Rejected';
}
elseif($s==1){
    $status = 'Under Review';
}
elseif($s==2){
    $status = 'Approved';
}
$_SESSION['status']=$status;
if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
header("location: http://localhost:63342/BookingApp/views/showstatus.php");
mysqli_close($con);