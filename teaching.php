<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Teaching | SAIL Lab</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>

	<div class="site-content">
		<div class="site-content">
			<?PHP
			$selected = "teaching";
			require("header1.php");

			?>

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">Security and Artificial Intelligence</h2>
					<small></small>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Dr. Siming Liu</h2>
						<h2>Undergraduate Courses:</h2>
						<ol start=1 type=1 style="list-style-type: circle; PADDING-LEFT: 2em">
							<li> CSC131 Computational Thinking</li>
							<li> CSC197 Introductory Topics in Computer Science</li>
							<li> CSC360 Operating Systems</li>
						</ol>
						<br>
						<h2>Graduate Courses:</h2>
						<ol start=1 type=1 style="list-style-type: circle; PADDING-LEFT: 2em">
							<li> CSC660 Operating Systems</li>
						</ol>



					</div>
				</div>
			</main> <!-- .main-content -->

			<div class="fullwidth-block" data-bg-color="#edf2f4">
				<div class="container">
					<div class="subscribe-form">
						<img src="images/arrow-long.png" alt="" class="logo"> &nbsp;
						<a href="https://www.missouristate.edu/registrar/catalog/courses_cs.htm">
							<h2>Computer Science Department Course Description</h2>
						</a>
					</div>
				</div>
			</div>


			<?PHP

			require("footer1.php");

			?>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

</body>

</html>