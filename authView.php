<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Authority</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <link rel = stylesheet href = animate.css>
    <script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h2 id="heading">Authorize Bookings</h2>
    <form id="form_1070899" class= "animated lightSpeedIn" action="">
        <div class="form_description">

        </div>
        <ul >

            <li id="li_1" >
                <label class="description" for="element_1">Name: </label>
                <div>
                    <p>';
                     echo $_SESSION['authname'];
                echo '</p>
                </div>
            </li>
            <li id="li_3" >
                <label class="description" for="element_3">Venue</label>
                <div>
                    <p>'; echo $_SESSION['venue'];
                    echo' </p>
                </div>
            </li>
            <li id="li_4" >
                <label class="description" for="element_4">Reason Of Booking </label>
                <div>
                    <p>'; echo $_SESSION['reason'].'**'.$_SESSION['Data'];
                     echo '</p>
                </div>
            </li>
            <li id="li_5" >
                <label class="description" for="element_5">Previous Usage </label>
                <div>
                    <p>'; echo $_SESSION['prevuse'].'--'.$_SESSION['its'].'--'.$_SESSION['bid'];
                     echo '</p>
                </div>
            </li>
            <div class = "top2">
            <form class = "but" action="approve.php">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm2" class="button_text2" type="hidden" name="submit" value="Approve" />
            </li>
            </form>
            <form class = "but" action="approve.php">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm2" class="button_text2" type="submit" name="submit" value="Aprov" />
            </li>
            </form>
            <form class = "but" action="uconsider.php">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm2" class="button_text2" type="submit" name="submit" value="Under Consideration" />
            </li>
            </form>
            </div>
            <div class="bottom2">
            <form class = "but" action="reject.php">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm3" class="button_text3" type="submit" name="submit" value="Reject" />
            </li>
            </form>
            <form class = "but" action="mainPage.html">
            <li class="buttons">
                <input type="hidden" name="form_id" value="1070899" />

                <input id="saveForm4" class="button_text4" type="submit" name="submit" value="Logout" />
            </li>
            </form>
            </div>
            <div align ="center" class="bottomhelp">
            <form method="post" action="help.html">
                <li class="buttons">
                    <input type="hidden" name="form_id" value="1070899" />

                    <input id="saveForm3" class="button_text" type="submit" name="submit" value="Help" />
                </li>
            </form>
            </div>
        </ul>
    </form>

</div>
<img id="bottom" src="bottom.png" alt="">
</body>
</html>';
