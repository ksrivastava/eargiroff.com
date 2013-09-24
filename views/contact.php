<!DOCTYPE html>
<html lang=en>

	<head>
		<link href="../style/style.css" rel="stylesheet" type="text/css" >
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
		<title>Emma Argiroff</title>

		<script src="../javascript/jquery.min.js"></script>
		<script type="text/javascript" src="../javascript/sendContact.js"></script>

	</head>
	<body>
		<div id="wrapper">
			<div id="main">
				
				<?php include("header.php"); ?>

				<div id="container">
					<h1 id ="header1">Contact</h1>
					<div id="content">
						 <div id="leftcolumn" class="done">
							<p style="font-size: 20px;"><b> Thank you</b></p>
							<p>I will get back to you as soon as possible.</p>
						</div>
						</div>
						<div id="leftcolumn">
							<form id = "contactForm" method="post" target="_blank" action="javascript:sendContact();">
							<!--<form id = "contactForm" method="post" target="_blank" action="../php/getForm.php">-->
								<p><b>Send me a message:</b></p>
								<label for "name">Name:</label>
								<input size = "28" type="text" id="name" name="name" /><br />
								<label for "email">Email:</label>
								<input size = "28" type="text" id="email" name="email" /><br /><br />
								<label for "message">Message:</label> <br />
								<textarea rows="15" cols="40" style = "resize: none;" name="message"></textarea><br /> 
								<input id ="submit-button" type="submit" value="Send" name="Send" />
							</form>
						</div>
						<div id="rightcolumn">
							<img src="../images/phone.png" width="20px"></img>     734 358 5158
							</br>
							<img src="../images/mail.png" width="20px"></img>     eargiroff@gmail.com
						</div>
						<div class = "clear"></div>
					</div>
				</div>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>