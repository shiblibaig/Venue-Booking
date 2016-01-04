<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Show Status</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <link rel = stylesheet href = animate.css/>
    <script type="text/javascript" src="view.js"></script>
</head>
<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h2 id="heading">Your Status</h2>
    <form id="form_1070899" class="animated"  method="post" action="">
        <div class="form_description">

        </div>
        <ul >

            <li id="li_1" >
                <label class="description" for="element_1">Venue </label>
                <div>
                    <p>';
echo $_SESSION['venue'];
echo '</p>
                </div>
            </li>
            <li id="li_3" >
                <label class="description" for="element_3">Status</label>
                <div>
                    <p>'; echo $_SESSION['status'];
echo' </p>
                </div>
            </li>
            <form class = "but" action="mainPage.html">
            <li class="buttons">

                <input id="saveForm1" class="button_text1" type="hidden" name="submit" value="Logout" />
            </li>
            </form>
            <form class = "but" action="mainPage.html">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm1" class="button_text1" type="submit" name="submit" value="Logout" />
            </li>
            </form>
        </ul>
    </form>

</div>
<img id="bottom" src="bottom.png" alt="">
</body>
</html>';