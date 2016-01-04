<html>
<head>
    <title>
        Login Page
    </title>
</head>
<body> Hello</body>

<?php
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

if(empty($_POST['element_1'])) die('ID is empty'.mysqli_error($con));
if(empty($_POST['element_2'])) die('Password is empty'.mysqli_error($con));
/*if(empty($_POST['usrnm'])) die('ID is empty'.mysqli_error($con));
if(empty($_POST['pswd'])) die('Password is empty'.mysqli_error($con));*/
printf("\n");
//We have to change it according to the new main page.
$qr = "select * from users  where ID = '$_POST[element_1]'; ";
$qrry = "select * from authority  where ID = '$_POST[element_1]'; ";
$res2 = mysqli_query($con,$qrry);
$res2_2 = mysqli_query($con,$qrry);
$res1 = mysqli_query($con,$qr);
$res1_1 =mysqli_query($con,$qr);
$row1 = mysqli_fetch_row($res1);
$row2 = mysqli_fetch_row($res2);

$ss = substr($row1[1],0,1);
$ss1 = substr($row2[1],0,1);
if($ss == 'Y' || $ss == 'F'){
    while($row3 = mysqli_fetch_row($res1_1)){
        if($row3[2]==$_POST['element_2']){
            header("location: http://localhost:63342/BookingApp/views/choicePage.html");
            $_SESSION['id'] = $_POST['element_1'];
            echo 'Hello';
        }
        else{
            header("location: http://localhost:63342/BookingApp/views/mainPage.html");
        }
    }
}
elseif($ss1=='A'){
    while($row4= mysqli_fetch_row($res2_2)){
        if($row4[2]==$_POST['element_2']){

            $_SESSION['authname'] = $row4[0];
            $_SESSION['id']=$row4[1];
            header("location: http://localhost:63342/BookingApp/views/authority.php");
        }
        else{
            header("location: http://localhost:63342/BookingApp/views/mainPage.html");
        }
    }
}
else{
    echo 'Wrong ID';
    header("location: http://localhost:63342/BookingApp/views/mainPage.html");
}
if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
echo '</html>';