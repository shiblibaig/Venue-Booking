<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 11-11-2015
 * Time: 01:00
 */
echo 'Before Connect' . print_r($_POST, true);
$con = mysqli_connect('localhost','root','shibli');
if(!$con)
{
    die('The connection is not possible' . mysqli_errno($con));
}
session_start();
echo 'After Connect: ';
mysqli_select_db($con,'sepm');
echo 'Database Selected';
$qr1= "select count(*) from booking where Status = 0;";
$res1 = mysqli_query($con,$qr1);
$row1 = mysqli_fetch_row($res1);
$qr2 = "select count(*) from guesthouse where guesthouse.Status = 0;";
$res2 = mysqli_query($con,$qr2);
$row2 = mysqli_fetch_row($res2);
$_SESSION['Data'] = $row1[0].'-*-'.$row2[0];
if($row1[0]==0 && $row2[0]==0){
    header("location: http://localhost:63342/webServer1/views/mainPage.html");
}
else if($row1[0]>0){
    $qr = "select * from booking where Status = 0;";
    $res1 = mysqli_query($con,$qr);
    $row = mysqli_fetch_row($res1);
    $_SESSION['bid']=$row[6];
    $_SESSION['venue']=$row[2] ;
    $_SESSION['prevuse'] = $row[4];
    if($row[4]==NULL){
        $_SESSION['prevuse']='First Use';
    }
    $_SESSION['reason']=$row[1] ;
    $_SESSION['its']=0;
    $_SESSION['sw']=$row[3];
}
elseif($row2[0]>0){
    $qr = "select * from guesthouse where guesthouse.Status = 0;";
    $res1 = mysqli_query($con,$qr);
    $row = mysqli_fetch_row($res1);
    $_SESSION['its']=1;
    $_SESSION['bid']=$row[8];
    $_SESSION['venue']='Guest House';
    $_SESSION['prevuse'] = 'Not Applicable';
    $_SESSION['reason']= $row[3].' Coming';
}
if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
header("location: http://localhost:63342/BookingApp/views/authView.php");