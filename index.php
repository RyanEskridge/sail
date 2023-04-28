<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Home | SAIL Lab</title>

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

		<?PHP
		$selected = "index";
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
					<h2 class="section-title">Welcome to the Security and Artificial Intelligence Lab (SAIL)</h2>
					<p>The Security and Artificial Intelligence Lab is interested in solving challenging problems in
						the
						areas of
						Artificial Intelligence, Computational Intlligence, Machine Learning, Reinforcement
						Learning,
						Evolutionary Algorithms,
						Search and Optimization with a focus on applications in Computer Games, Multi-Agent Systems,
						and
						Simulations.</p>
					<p>
						Specific projects currently undergoing in our lab include the development of multi-agent
						reinforcement learning algorithms for real-time strategy games,
						DDPG with transfer learning for car racing games, content generation on Minecraft.
					</p>


				</div>
			</div>

			<div class="fullwidth-block">
				<div class="container">
					<div class="project-list">
						<div class="project">
							<div class="project-content">
								<figure class="project-image"><img src="projects/smac/images/project-1.jpg"
										alt="Project"></figure>
								<h3 class="project-title">Multi-Agent Reinforcement Learning</h3>
								<p>A novel semi-centralized deep reinforcement learning algorithm for mixed
									cooperative
									and competitive multi-agent environments.</p>
								<a href="project-rts.php" class="button">Learn more</a><br>
							</div>
						</div>
						<div class="project">
							<div class="project-content">
								<figure class="project-image"><img src="projects/torcs/images/project-2.jpg"
										alt="Project"></figure>
								<h3 class="project-title">Deep Deterministic Policy Gradiant for TORCS</h3>
								<p>Building a car racing program with deep deterministic policy gradiant algorithms
									for
									a car racing simulator TORCS.</p><br>
								<a href="project-torcs.php" class="button">Learn more</a>
							</div>
						</div>
						<div class="project">
							<div class="project-content">
								<figure class="project-image"><img src="images/project-3.jpg" alt="Project">
								</figure>
								<h3 class="project-title">MineRL: Towards State of the Art AI in Minecraft</h3>
								<p>Build agents that play Minecraft using state-of-the-art Machine Learning! </p>
								<br><br>
								<a href="project-rts.php" class="button">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fullwidth-block" data-bg-color="#edf2f4">
				<div class="container" margin="auto">
					<h2 class="section-title">Team</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-siming.jpg" alt="" class="team-image"></a>
								<h3 class="team-name">Dr. Siming Liu</h3>
								<!--<p>Assistant Professor. Computational Intelligence, Artificial Intelligence,
									Reinforcement Learning, Optimization. </p> -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-marium.jpg" alt="" class="team-image"></a>
								<h3 class="team-name">Marium Ema</h3>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-Siddiqua.jpg" alt="" class="team-image"></a>
								<h3 class="team-name">Ayesha Siddiqua</h3>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-Siddika.jpg" alt="" class="team-image"></a>
								<h3 class="team-name">Ayesha Nipu</h3>
							</div>
						</div>
					</div> <!-- .row -->
					<div class="row centered">
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-cj .jpg" alt="" class="team-image"></a>
								<h3 class="team-name">C.J. Moore</h3>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-gavin .jpg" alt="" class="team-image"></a>
								<h3 class="team-name">Gavin Moore</h3>
							</div>
						</div>
						<div class="col-md-3">
							<div class="team">
								<a href="team.php"><img src="images/person-default-icon.jpg" alt=""
										class="team-image"></a>
								<h3 class="team-name">Ryan Eskridge</h3>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</div>

		</main> <!-- .main-content -->

		<?PHP

		require("footer1.php");

		?>
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>