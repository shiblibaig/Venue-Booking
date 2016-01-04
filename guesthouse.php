<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 10-11-2015
 * Time: 18:39
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

if(empty($_POST['element_1_1'])) die('Name is empty'.mysqli_error($con));
if(empty($_POST['element_2_1'])) die('Month is empty'.mysqli_error($con));
if(empty($_POST['element_2_2'])) die('Date is empty'.mysqli_error($con));
if(empty($_POST['element_2_3'])) die('Year is empty'.mysqli_error($con));
if(empty($_POST['element_3_1'])) die('Month is empty'.mysqli_error($con));
if(empty($_POST['element_3_2'])) die('Date is empty'.mysqli_error($con));
if(empty($_POST['element_3_3'])) die('Year is empty'.mysqli_error($con));
if(empty($_POST['element_7'])) die('Name of guest is empty'.mysqli_error($con));
if(empty($_POST['element_4'])) die('Number of rooms is empty'.mysqli_error($con));
if(empty($_POST['element_6'])) die('Relation with guest is empty'.mysqli_error($con));
if(empty($_POST['element_5'])) die('Phone number is empty'.mysqli_error($con));

$adate = $_POST['element_2_3']."/".$_POST['element_2_1']."/".$_POST['element_2_2'];
$ddate = $_POST['element_3_3']."/".$_POST['element_3_1']."/".$_POST['element_3_2'];
$total =0;
$maxRooms = 5;
$status =0;
$qr = "Select number_of_rooms from guesthouse;";
$res1 = mysqli_query($con,$qr);
while($row1 = mysqli_fetch_row($res1)){
    $total = $total + $row1[0];
}
$qr2 = "select max(Book_ID) from guesthouse;";
$res2 = mysqli_query($con,$qr2);
$row2 = mysqli_fetch_row($res2);
if($row2[0]==NULL){
    $bid = 1;
}
else{
    $bid = $row2[0]+1;
}
$qr3 = "select max(ID) from venues where ID in (14,15,16,17,18) and Status = 0;";
$res3 = mysqli_query($con,$qr3);
$row3 = mysqli_fetch_row($res3);
$s = $row[0];
if($total ==$maxRooms){
    header("location: http://localhost:63342/webServer1/views/alert.html");
}
else
{
    $rem = $maxRooms-$total;
    if($rem>$_POST['element_4']){
        $query = "Insert into guesthouse VALUES ('$_POST[element_1_1]','$adate','$ddate','$_POST[element_6]','$_POST[element_7]','$_POST[element_5]','$_POST[element_4]','$status','$bid');";
        for($i=0;$i<$_POST['element_4'];$i++){
            $qr4 = "update venues set Status = 2 where ID = '$s';";
            $res4 = mysqli_query($con,$qr4);
            $s++;
        }
    }
    else
    {
        if($_POST['element_10']=='on'){
            $query = "Insert into guesthouse VALUES ('$_POST[element_1]','$adate','$ddate','$_POST[element_6]','$_POST[element_7]','$_POST[element_5]','$rem','$status','$bid');";
            for($i=0;$i<$rem;$i++){
                $qr4 = "update venues set Status = 2 where ID = '$s';";
                $res4 = mysqli_query($con,$qr4);
                $s++;
            }
        }
        else{
            header("location: http://localhost:63342/BookingApp/views/mainPage.html");
        }
    }
}
if(!mysqli_query($con,$query)){
    die('Error: '.mysqli_error($con));
}

mysqli_close($con);
header("location: http://localhost:63342/BookingApp/views/choicePage.html");