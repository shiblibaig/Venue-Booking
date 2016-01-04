<?php
session_start();
echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Venue Status</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<link rel = stylesheet href="animate.css">
<script type="text/javascript" src="view.js"></script>
</head>
<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h2>Status of all Venues</h2>
    <form id="form_1070899" class="animated bounceInRight"  method="post" action="">
        <div class="form_description">

        </div>
        <ul >
            <li><p>LT-1</p>
                <p>';echo $_SESSION['status1']; echo'</p>
            </li>
            <li><p>LT-2</p>
                <p>';echo $_SESSION['status2']; echo'</p>
            </li>
            <li><p>LT-3</p>
                <p>'; echo $_SESSION['status3']; echo'</p>
            </li>
            <li><p>LT-4</p>
                <p>'; echo $_SESSION['status4']; echo'</p>
            </li>
            <li><p>LT-5</p>
                <p>'; echo $_SESSION['status5']; echo'</p>
            </li>
            <li><p>LT-6</p>
                <p>'; echo $_SESSION['status6']; echo'</p>
            </li>
            <li><p>LT-7</p>
                <p>'; echo $_SESSION['status7']; echo'</p>
            </li>
            <li><p>LT-8</p>
                <p>'; echo $_SESSION['status8']; echo'</p>
            </li>
            <li><p>LT-9</p>
                <p>'; echo $_SESSION['status9']; echo'</p>
            </li>
            <li><p>LT-10</p>
                <p>'; echo $_SESSION['status10']; echo'</p>
            </li>
            <li><p>CP Lab</p>
                <p>'; echo $_SESSION['status11']; echo'</p>
            </li>
            <li><p>ECE Lab</p>
                <p>'; echo $_SESSION['status12']; echo'</p>
            </li>
            <li><p>S.A.C.</p>
                <p>'; echo $_SESSION['status13']; echo'</p>
            </li>
            <li><p>Guest House Room-1</p>
                <p>'; echo $_SESSION['status14']; echo'</p>
            </li>
            <li><p>Guest House Room-2</p>
                <p>';echo $_SESSION['status15']; echo'</p>
            </li>
            <li><p>Guest House Room-3</p>
                <p>';echo $_SESSION['status16']; echo'</p>
            </li>
            <li><p>Guest House Room-4</p>
                <p>'; echo $_SESSION['status17']; echo'</p>
            </li>
            <li><p>Guest House Room-5</p>
                <p>'; echo $_SESSION['status18']; echo'</p>
            </li>
        </ul>
    </form>
    <form action = "mainPage.html">
    <input type = submit value = "Logout"/>
</form>
</div>
<img id="bottom" src="bottom.png" alt="">
</body>
</html>';