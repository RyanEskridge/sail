<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Projects | SAIL Lab</title>

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
			$selected = "projects";
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
						<h2 class="section-title">Active Projects:</h2>
						<!--Project 1: MAIDRL -->
						<div class="boxed-icon">
							<a href="project-rts.php"><img src="projects/smac/images/figure.jpg" width="400" alt=""
									class="icon"></a>
							<div class="row" style="padding-left:230px">
								<a href="project-rts.php">
									<h3>Multi-Agent Learning for RTS Games</h3>
								</a>
								<p>A novel semi-centralized deep reinforcement learning algorithm for mixed cooperative
									and
									competitive multi-agent environments.</p>
								<div>
									<strong>Environment:</strong> Ubuntu, SMAC, StarCraft II Learning Environment,
									Tensorflow2, Python <br>
									<strong>Goal:</strong> Scale deep reinforcement learning algorithms for mixed
									cooperative and competitive multi-agent environments.<br>
									<strong>Keywords:</strong> Markov Decision Process, Artificial Neural Networks,
									Machine
									Learning, Reinforcement Learning, Deep Learning, Multi-Agent Systems, Influence Map,
									StarCraft II
								</div>
								<br>
							</div>
						</div>

						<!--Project 2: TORCS -->
						<div class="boxed-icon">
							<a href="project-torcs.php"><img src="projects/torcs/images/project-torcs.jpg" width="400"
									alt="" class="icon"></a>
							<div class="row" style="padding-left:230px">
								<a href="project-torcs.php">
									<h3>Deep Deterministic Policy Gradiant for Car Racing Games</h3>
								</a>
								<p>Building a car racing program with deep deterministic policy gradiant algorithms for
									a
									car racing simulator TORCS.</p>
								<div>
									<strong>Environment:</strong> Ubuntu, Tensorflow2, Python, TORCS <br>
									<strong>Goal:</strong> Deep reinforcement learning algorithms for single-agent and
									multi-agent environments.<br>
									<strong>Keywords:</strong> Markov Decision Process, Artificial Neural Networks,
									Machine
									Learning, Reinforcement Learning, Deep Deterministic Policy Gradiant, Multi-Agent
									Systems,
								</div>
								<br>
							</div>
						</div>

						<h2 class="section-title">Other Projects:</h2>
						<!--Project : MineRL -->
						<div class="boxed-icon">
							<a href="#"><img src="images/project-3.jpg" width="400" alt="" class="icon"></a>
							<div class="row" style="padding-left:230px">
								<a href="#">
									<h3>MineRL: Towards AI in Minecraft</h3>
								</a>
								<p>MineRL is a research project started at Carnegie Mellon University aimed at
									developing
									various aspects of artificial intelligence within Minecraft.</p>
								<div>
									<strong>Environment</strong>: Ubuntu, Minecraft, Tensorflow2, Python <br>
									<strong>Goal</strong>: Building agents that play Minecraft using state-of-the-art
									Machine Learning!<br>
									<strong>Keywords</strong>: Reinforcement Learning, Deep Learning, Minecraft, MineRL,
									Marlo <br>
									<strong>MineRL Documentation</strong>:https://minerl.io/docs/<br>
									<strong>MineRL Diamond Competition</strong>: https://minerl.io/diamond/<br>
									<strong>Content Generation Competition</strong>:
									https://gendesignmc.engineering.nyu.edu/
								</div>
								<br>
							</div>
						</div>

						<!--Project : FlappyBird -->
						<div class="boxed-icon">
							<a href="#"><img src="projects/flappy/flappybirds.gif" width="400" alt="" class="icon"></a>
							<div class="row" style="padding-left:230px">
								<a href="#">
									<h3>Reinforcement Learning for Flappy Bird</h3>
								</a>
								<p>Practice machine learning skills and get Flappy Bird to learn how to play the game by
									itself. </p>
								<div>
									<strong>Environment:</strong> Tensorflow2, Python, openAI Gym <br>
									<strong>Tutorials</strong>:
									<ol style="padding-left: 30px;">
										<li><a href="http://sarvagyavaish.github.io/FlappyBirdRL/">Flappy Bird RL
												(Q-Table)</a></li>
										<li><a
												href="https://towardsdatascience.com/use-reinforcement-learning-to-train-a-flappy-bird-never-to-die-35b9625aaecc">Flappy
												Bird RL 2 (Q-Table)</a></li>
										<li><a href="https://github.com/yenchenlin/DeepLearningFlappyBird">Flappy Bird
												Deep
												Learning (CNN, Q-Network)</a></li>
									</ol>

								</div>
								<br>
							</div>
						</div>
						<!--
						Project : Art Replicator
						<div class="boxed-icon">
							<a href="replicator.php"><img src="images/replicator-project.png" width="400" alt=""
									class="icon"></a>
							<div class="row" style="padding-left:230px">
								<a href="replicator.php">
									<h3>Art Replicator: Recreating Art Using Verbal Descriptions as Prompts</h3>
								</a>
								<p>Art Replicator attempts to recreate famous artworks by feeding a generative
									text-to-image
									AI with verbal descriptions of the work.</p>
								<p><strong>Environment:</strong> Stable Diffusion, Python, Conda<br></p>
							</div>
						</div> -->
					</div>
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