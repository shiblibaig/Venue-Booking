<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 10-11-2015
 * Time: 14:18
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
if(empty($_POST['element_1_1'])) die('Name is empty'.mysqli_error($con));
if(empty($_POST['element_2_1'])) die('Month is empty'.mysqli_error($con));
if(empty($_POST['element_2_2'])) die('Date is empty'.mysqli_error($con));
if(empty($_POST['element_2_3'])) die('Year is empty'.mysqli_error($con));
if(empty($_POST['element_6'])) die('ID is empty'.mysqli_error($con));
if(empty($_POST['element_8'])) die('Phone Number is empty'.mysqli_error($con));
if(empty($_POST['element_7'])) die('Reason is empty'.mysqli_error($con));
if(empty($_POST['element_9'])) die('Venue is empty'.mysqli_error($con));
if(empty($_POST['element_10'])) die('SW is empty'.mysqli_error($con));

$name = $_POST['element_1_1'];
$date = $_POST['element_2_2']."/".$_POST['element_2_1']."/".$_POST['element_2_3'];
if($_POST['element_10']== 'y' || $_POST['element_10']== 'Y')
{
    $sw = 1;
}
elseif($_POST['element_10']== 'n' || $_POST['element_10']== 'N')
{
    $sw = 2;
}
else
{
    echo 'Improper Selection';
    die();
}
echo $sw."--";

$qrry = "select max(Book_ID) from booking";
$res2 = mysqli_query($con,$qrry);
$row2 = mysqli_fetch_row($res2);
$venue = 1;
if($row2[0]=='NULL'){
    $a=1;
}
else{
    $a = $row2[0]+1;
}
echo $a."<- its bid";
$app = 0;
/*$qrr1 = "select * from users where ID = '$_SESSION[name]';";
$result1 = mysqli_query($con,$qrr1);
$rowres1 = mysqli_fetch_row($result1);
$qr2 = "select * from venues where ID = '$_POST[element_9]';";
$result2 = mysqli_query($con,$qr2);
$rowres2 = mysqli_fetch_row($result2);
if($rowres1[5]*$rowres2[2]>=64){
    $app =2;
}*/
if($_POST['element_9']==1){
    //For SAC
    $qr3 = "select count(*) from venues where ID =13 and Status =2;";
    $res3 = mysqli_query($con,$qr3);
    $row3 = mysqli_fetch_row($res3);
    if($row3[0]==1){
        header("location: http://localhost:63342/BookingApp/views/alert.html");
    }
    else{
        $_POST['element_9'] = 13;
        $query = "Insert into booking values ('$_SESSION[id]','$_POST[element_7]','$_POST[element_9]','$sw',NULL,NULL,$a,$app,'$_POST[element_8]','$name');";
        //mysqli_query($con,$query);
        $query1 = "update venues set Status = 2 where ID = '$_POST[element_9]';";
        mysqli_query($con,$query1);
    }
}
elseif($_POST['element_9']==2){
    //For bigger LTs
    $qr4 = "select count(*) from venues where ID in (1,2,9,10) and status =2;";
    $res4 = mysqli_query($con,$qr4);
    $row4 = mysqli_fetch_row($res4);
    if($row4[0]==4){
        header("location: http://localhost:63342/BookingApp/views/alert.html");
    }
    else{
        $qr5 = "select max(ID) from venues where ID in (1,2,9,10) and Status = 2;";
        $r = mysqli_query($con,$qr5);
        $row = mysqli_fetch_row($r);
        if($row[0] == 2){
            $_POST['element_9'] = $row[0]-1;
        }
        elseif($row[0]==9){
            $_POST['element_9'] = $row[0]+1;
        }
        else{
            $_POST['element_9'] = 9;
        }
        $query = "Insert into booking values ('$_SESSION[id]','$_POST[element_7]','$_POST[element_9]','$sw',NULL,NULL,$a,$app,'$_POST[element_8]','$name');";
       // mysqli_query($con,$query);
        $query1 = "update venues set Status = 2 where ID = '$_POST[element_9]';";
        mysqli_query($con,$query1);
    }
}
elseif($_POST['element_9']==3){
    //For smaller LTs
    $qr5 = "select * from venues where ID in (5,6,7,8,3,4) and Status =2;";
    $res5 = mysqli_query($con,$qr5);
    $row4 = mysqli_fetch_row($res5);
    if($row4[0]==6){
        header("location: http://localhost:63342/BookingApp/views/alert.html");
    }
    else{
        $qr5 = "select max(ID) from venues where ID in (5,6,7,8,3,4) and Status = 2;";
        $r = mysqli_query($con,$qr5);
        $row = mysqli_fetch_row($r);
        $_POST['element_9']=$row[0]+1;
        $query = "Insert into booking values ('$_SESSION[id]','$_POST[element_7]','$_POST[element_9]','$sw',NULL,NULL,$a,$app,'$_POST[element_8]','$name');";
        //mysqli_query($con,$query);
        $query1 = "update venues set Status = 2 where ID = '$_POST[element_9]';";
        mysqli_query($con,$query1);
    }

}
elseif($_POST['element_9']==4){
    //For CP lab.
    $qr6 = "select * from venues where ID = 11 and Status =2;";
    $res6 = mysqli_query($con,$qr6);
    $row4 = mysqli_fetch_row($res6);
    if($row4[0]==1){
        header("location: http://localhost:63342/BookingApp/views/alert.html");
    }
    else{
        $_POST['element_9'] = 11;
        $query = "Insert into booking values ('$_SESSION[id]','$_POST[element_7]','$_POST[element_9]','$sw',NULL,NULL,$a,$app,'$_POST[element_8]','$name');";
        //mysqli_query($con,$query);
        $query1 = "update venues set Status = 2 where ID = '$_POST[element_9]';";
        mysqli_query($con,$query1);
    }
}
elseif($_POST['element_9']==5){
    //For ECE Lab
    $qr6 = "select * from venues where ID = 12 and Status =2;";
    $res6 = mysqli_query($con,$qr6);
    $row4 = mysqli_fetch_row($res6);
    if($row4[0]==1){
        header("location: http://localhost:63342/BookingApp/views/alert.html");
    }
    else{
        $_POST['element_9'] = 11;
        $query = "Insert into booking values ('$_SESSION[id]','$_POST[element_7]','$_POST[element_9]','$sw',NULL,NULL,$a,$app,'$_POST[element_8]','$name');";
        //mysqli_query($con,$query);
        $query1 = "update venues set Status = 2 where ID = '$_POST[element_9]';";
        mysqli_query($con,$query1);
    }
}

if(!mysqli_query($con,$query)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
if($sw ==1){
    header("location: http://localhost:63342/BookingApp/views/spreadTheWord.html");
}
header("location: http://localhost:63342/BookingApp/views/choicePage.html");
