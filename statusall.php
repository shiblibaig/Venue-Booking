<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 11-11-2015
 * Time: 01:00
 */echo 'Before Connect' . print_r($_POST, true);
session_start();
$con = mysqli_connect('localhost','root','shibli');
if(!$con)
{
    die('The connection is not possible' . mysqli_errno($con));
}
echo 'After Connect: ';
mysqli_select_db($con,'sepm');
echo 'Database Selected';
$qr = "select * from venues ";
$res1 = mysqli_query($con,$qr);
$status =0;
$_SESSION['status1'] = "Un-Booked";
$_SESSION['status2'] = "Un-Booked";
$_SESSION['status3'] = "Un-Booked";
$_SESSION['status4'] = "Un-Booked";
$_SESSION['status5'] = "Un-Booked";
$_SESSION['status6'] = "Un-Booked";
$_SESSION['status7'] = "Un-Booked";
$_SESSION['status8'] = "Un-Booked";
$_SESSION['status9'] = "Un-Booked";
$_SESSION['status10'] = "Un-Booked";
$_SESSION['status11'] = "Un-Booked";
$_SESSION['status12'] = "Un-Booked";
$_SESSION['status13'] = "Un-Booked";
$_SESSION['status14'] = "Un-Booked";
$_SESSION['status15'] = "Un-Booked";
$_SESSION['status16'] = "Un-Booked";
$_SESSION['status17'] = "Un-Booked";
$_SESSION['status18'] = "Un-Booked";
$i=0;
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status1']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status1']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status1']='Booked';
}
//Another Venue
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status2']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status2']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status2']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status3']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status3']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status3']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status4']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status4']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status4']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status5']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status5']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status5']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status6']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status6']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status6']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status7']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status7']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status7']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status8']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status8']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status8']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status9']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status9']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status9']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status10']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status10']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status10']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status11']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status11']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status11']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status12']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status12']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status12']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status13']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status13']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status13']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status14']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status14']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status14']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status15']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status15']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status15']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status16']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status16']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status16']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status17']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status17']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status17']='Booked';
}
$row = mysqli_fetch_row($res1);
if($row[1]==0){
    $_SESSION['status18']='Un-Booked';
}
elseif($row[1]==1){
    $_SESSION['status18']='Booked';
}
elseif($row[1]==2){
    $_SESSION['status18']='Booked';
}

if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
header("location: http://localhost:63342/BookingApp/views/showstatusall.php");
mysqli_close($con);