<!DOCTYPE html>
<html lang=en>
	<head>
		<meta name="description" content="This is Emma Argiroff's website.">
		<link href="../style/style.css" rel="stylesheet" type="text/css" >
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
		<title>Emma Argiroff</title>
	</head>

	<!-- <script type="text/javascript" src="mouseOver.js"></script> -->
	<!-- <script type="text/javascript" src="timeOut.js"></script> -->
	<script src="../javascript/jquery.min.js"></script>
	<script src="../javascript/jquery.cross-slide.min.js"></script>

<script>
  $(function() {
    $('#slideshow').crossSlide({
      speed: 50,
      fade: 3
    }, [
      { src: '../images/squirrel_b.jpg', dir: 'up'},
      { src: '../images/owl_b.jpg', dir: 'down'},
      { src: '../images/aston_b.jpg', dir: 'up'},
      { src: '../images/sunflower_b.jpg', dir: 'down'}
    ])
  });
</script>

	<body>
		<div id="wrapper">
			<div id="main">
				
				<?php include("header.php"); ?>

				<div id="slideshow"></div>

				<div id="container">
					<h1 id ="header1">Welcome</h1>
					<div id="content">
						<p>My name is Emma Argiroff and I am currently pursuing a dual degree in fine arts and environmental science through the University of Michigan. I am interested in drawing, painting and other types of fine art. I am working towards combining my love of illustration with my environmental interests. I hope you enjoy my portfolio! Feel free to get in touch.</p>
					</div>
				</div>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>
