<html>
<head>
    <title>
        Spread the word!
    </title>
</head>
</html>
<?php
echo 'Halo';
echo 'Before Connect' . print_r($_POST, true);
$con = mysqli_connect('localhost','shibli','shibli');
if(!$con)
{
    die('The connection is not possible' . mysqli_errno($con));
}
echo 'After Connect: ';
mysqli_select_db($con,'database1');
echo 'Database Selected';
session_start();
if(empty($_POST['element_1'])) die('Name is empty'.mysqli_error($con));
if(empty($_POST['element_2'])) die('ID is empty'.mysqli_error($con));

$qry = "select max(boodID) from stw;";
$res2 = mysqli_query($con,$qry);
$row = mysqli_fetch_row($res2);
if($row[0]==NULL){
    $a=1;
}
else{
    $a = $row[0]+1;
}
$qr = "insert into stw values ('$_POST[element_1]','$_POST[element_2]',$a);";
$res1 = mysqli_query($con,$qr);

if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
header("location: http://localhost:63342/BookingApp/views/choicePage.html");
mysqli_close($con);