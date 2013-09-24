<!DOCTYPE html>
<html lang=en>

	<head>
		<link href="../style/style.css" rel="stylesheet" type="text/css" >
		<link href="../lightbox/css/lightbox.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
		<title>Emma Argiroff</title>
	</head>

	<script src="../lightbox/js/jquery-1.7.2.min.js"></script>
	<script src="../lightbox/js/lightbox.js"></script>

	<body>
		<div id="wrapper">
			<div id="main">
				
				<?php include("header.php"); ?>

				<div id="container">
					<h1 id ="header1">My portfolio</h1>
					<div id="content">
						<div class="gallery">

							<?php include("../php/gallery.php"); ?>

							<!-- <img id="image1" src="../images/aston.jpg" alt="Aston Martin DB9" height = "150" width = "150" onmouseover="mouseOverImage('image1', '../images/owl.jpg')" onmouseout="mouseOutImage('image1', '../images/aston.jpg')">

							<a href="../images/owl.jpg" rel="lightbox[pics]" title="L'Owl" ><img src="../images/owl.jpg" id = "medium" width="120"/></a>

							<a href="../images/squirrel.jpg" rel="lightbox[pics]" title="Le Squirrel"><img src="../images/squirrel.jpg" width="120"/></a>

							<a href="../images/aston.jpg" rel="lightbox[pics]" title="L'Aston Martin DB9"><img src="../images/aston.jpg" width="120" /></a>

							<a href="../images/sunflower.jpg" rel="lightbox[pics]" title="Le Sunflower"><img src="../images/sunflower.jpg" width="120" /></a>
		
							<a href="../images/aston2.jpg" rel="lightbox[pics]" title="L'Aston Martin DB9"><img src="../images/aston2.jpg" id = "medium" width="120" /></a>

							<a href="../images/sunflower2.jpg" rel="lightbox[pics]" title="Le Sunflower"><img src="../images/sunflower2.jpg" id = "large" width="120" /></a>

							<a href="../images/owl2.jpg" rel="lightbox[pics]" title="L'Owl" ><img src="../images/owl2.jpg" width="120"/></a>

							<a href="../images/squirrel2.jpg" rel="lightbox[pics]" title="Le Squirrel"><img src="../images/squirrel2.jpg" width="120"/></a>

							<a href="../images/owl3.jpg" rel="lightbox[pics]" title="L'Owl" ><img src="../images/owl3.jpg" id = "large" width="120"/></a>

							<a href="../images/aston3.jpg" rel="lightbox[pics]" title="L'Aston Martin DB9"><img src="../images/aston3.jpg" id = "medium" width="120" /></a>

							<a href="../images/squirrel3.jpg" rel="lightbox[pics]" title="Le Squirrel"><img src="../images/squirrel3.jpg" width="120"/></a>

							<a href="../images/sunflower3.jpg" rel="lightbox[pics]" title="Le Sunflower"><img src="../images/sunflower3.jpg" width="120" /></a> -->

						</div>		
					</div>
				</div>
			</div>
		</div>

		</div>

		<?php include("footer.php"); ?>

	</body>
</html>