<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cancellation Page</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<link rel = "stylesheet" href = "animate.css"/>
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h2>Cancellation</h2>
		<form id="form_1070899" class="animated bounceInRight"  method="post" action="reasonInput.php">
			<div class="form_description">

		</div>						
			<ul >
				<li id="li_1" >
		<label class="description" > <p>';
		echo $_SESSION['id'];
		echo'</p></label>
		<div>
			</br>
		</div> 
		</li>	
			<li id="li_2" >
		<label class="description" for="element_2">Reason of Cancellation </label>
		<div>
			<input id="element_2" name="rej" class="element text medium" type="text" maxlength="255" value="hel"/>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1070899" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	

	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>';

