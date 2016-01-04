<html>
<head>
    <title>
        Experiment.PHP
    </title>
</head>
</html>
<?php
session_start();
echo '<body>'; echo $_SESSION['bid'].'--'.$_SESSION['its']; echo'</body>';
//echo 'Before Connect ' . print_r($_POST, true) ;
//display the $_POST array
//$_POST['name'] = 'p';
//$_POST['num']=  125 ;
//$dbnm = 'database1';
/*$con = mysqli_connect('localhost','shibli','shibli');
if (!$con)
{
    die('The connection is not possible: ' . mysqli_error($con));
}
//echo 'After Connect ';

mysqli_select_db($con, 'database1');
$pun =9;
//echo 'Database selected ';

//echo $_POST['name'];
if(empty($_POST['name'])) die ('Name is empty'. mysqli_error($con));
if(empty($_POST['num'])) die ('Number is empty'. mysqli_error($con));

$query = "INSERT INTO tab1 VALUES ('$_POST[name]','$_POST[num]');";
/*$queryone = "INSERT INTO tab1 VALUES ('ret',89);";
mysqli_query($con,$queryone);
$query = "INSERT INTO tab1 VALUES ('jh',89);";
$query = "Delete from tab1 where name = 'njh';";
//$res = mysqli_real_query($con,$query);
mysqli_stmt_execute($res);*/
//$query = "select * from tab1;";
//$query = "select count(*) from new;";
//$res = mysqli_query($con,$query);
//$row = mysqli_fetch_row($res);
//echo $row[0];
//session_start();
/*if($res = mysqli_query( $con ,$query)){
    printf("\n");
    while($row = mysqli_fetch_row($res)){
        printf("%s",$row[0]);
    }
}*/
/*if($res = mysqli_query( $con ,$query)){
    printf("\n");
    while($row = mysqli_fetch_row($res)){
        printf ("%s (%s)\n",$row[0],$row[1]);
    }
    mysqli_free_result($res);
}*/
//Here I started a new comment.
/*$r = 100;
echo '<head><script type = javascript>function ok(){var a = prompt("Enter the choice"); alert(a);}</script></head>';
echo '<p align = center>';
echo $r +234;
echo '</p>';
echo '<form action = new.html method = post > ';

echo '<div align= "center">';
echo '<input type = text name =b /> <-Name';
$_SESSION['k']=$_POST['b'];
echo '<input type = submit value = click onclick = "ok();" />';
echo '</div>';
echo '</form>';
if (!mysqli_query($con,$query)) {
    die('Error: ' . mysqli_error($con));
}
//echo "Successful execution!!! ";
mysqli_close($con);
header("location: http://localhost:63342/webServer1/views/new.html");*/
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 11-11-2015
 * Time: 01:00
 */
//echo 'Before Connect' . print_r($_POST, true);
$con = mysqli_connect('localhost','shibli','shibli');
if(!$con)
{
    die('The connection is not possible' . mysqli_errno($con));
}
//echo 'After Connect: ';
mysqli_select_db($con,'database1');
//echo 'Database Selected';
$sd= 23;
$qr = "select * from tab1 where number = '$_POST[num]'; ";
$res1 = mysqli_query($con,$qr);
$e= 0;
echo '</br></br></br>';
echo '<head><link rel="stylesheet" href = "basic.css"/> <link rel = "stylesheet" href = "animate.css"></head>';
while($row = mysqli_fetch_row($res1)){
    $s = $row[1];
    $a = $row[0];
    if ($a == NULL){
        echo 'NULL is here';
    }
    echo '<body>';
    echo '<div class = "animated bounce" id = "box" align = "left" >';
    echo '<p >';
    echo $s.' || ';
    echo '<span>';
    echo $a;
    echo '</span>';
    echo '</p>';
    echo '</div>';
    echo '<body>';
    $e++;
}

if(!mysqli_query($con,$qr)){
    die('Error: '.mysqli_error($con));
}
mysqli_close($con);
