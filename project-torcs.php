<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>TORCS | SAIL Lab</title>

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
		$selected = "torcs";
		require("header1.php");

		?>

		<div class="page-head" data-bg-image="projects/torcs/images/slider-2.jpg">
			<div class="container">
				<h2 class="page-title">Security and Artificial Intelligence</h2>
				<small></small>
			</div>
		</div>

		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<a href="projects.html" class="button back"><img src="images/arrow-back.png" alt="">Back to
						projects</a>
					<div class="row">
						<div class="col-md-6">
							<figure>
								<img src="projects/torcs/images/project-torcs.jpg" alt="">
							</figure>
						</div>
						<div class="col-md-6">
							<h2 class="section-title">Deep Reinforcement Learning on TORCS</h2>
							<ul class="project-info">
								<li><strong>Date:</strong> 06/10/21</li>
								<li><strong>Team:</strong> Rafail Islam, Siming Liu</li>
								<li><strong>Environment:</strong> Ubuntu, TORCS, Tensorflow, Python</li>
								<li><strong>Goal:</strong> Deep reinforcement learning algorithms for single-agent and
									multi-agent environments.</li>
								<li><strong>Key Words:</strong> Deep reinforcement learning, multiagent system, DDPG,
									TORCS</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<h4 class="section-title">Project Instruction</h4>



						<h4>1. Overview</h4>
						<p style="padding-left: 10px;">In recent years, reinforcement learning algorithms have been used
							in the field of multi-agent systems to help
							the agents with interactions and cooperation on a variety of tasks. Controlling multiple
							agents simultaneously is extremely
							challenging as the complexity increases drastically with the number of agents in the system.
							In this study, we propose a
							novel semi-centralized deep reinforcement learning algorithm for mixed cooperative and
							competitive multi-agent
							environments. Specifically, we design a robust DenseNet-style actor-critic structured deep
							neural network for controlling multiple
							agents based on the combination of local observation and abstracted global information to
							compete with opponent
							agents. We extract common knowledge through influence maps considering both enemy and
							friendly agents for unit positioning
							and decision-making in combat.
						</p>

						<h4>2. Linux Environment - Ubuntu</h4>
						<p style="padding-left: 10px;">https://ubuntu.com/download/desktop</p>
						<h4>3. TORCS Reinforcement Learning Environment</h4>
						<p style="padding-left: 10px;"><a
								href="projects\torcs\Environment-Installation-Guide-for-gym_torcs-in-Ubuntu.docx">Environment
								Installation Guide for gym_torcs in Ubuntu</a></p>
						<h4>4. TORCS Instruction</h4>
						<p style="padding-left: 10px;">
							<strong>TORCS</strong>: http://xed.ch/h/torcs.html<br>
							<strong>TORCS Manual</strong>: <a
								href="projects\torcs\Simulated Car Racing ChampionshipCompetition Software Manual.pdf">Simulated
								Car Racing ChampionshipCompetition Software Manual (PDF)</a><br>
							<strong>MultiAgentTORCS</strong>: https://github.com/abhisheknaik96/MultiAgentTORCS<br>
						</p>
						<h4>5. TensorFlow 2</h4>
						<p style="padding-left: 10px;">https://www.tensorflow.org/tutorials/quickstart/beginner</p>
						<h4>6. Reinforcement Learning</h4>
						<p style="padding-left: 10px;">
							https://www.tensorflow.org/tutorials/reinforcement_learning/actor_critic</p>

						<br>
						<h4 class="section-title">Open Research Questions</h4>

						<ol style="padding-left: 20px;">
							<li>How to learn to race in TORCS</li>
							<li>How to learn from other champion drivers</li>
							<li>How to drive with other cars (Multi-Agent Systems)</li>
							<li>How to drive like a human driver</li>
							<li>More...</li>
						</ol>

					</div>
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