<header class="site-header" data-bg-image="">
    <div class="container">
        <div class="header-bar">
            <a href="index.php" class="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Missouri State University</h1>
                    <small class="site-description">Computer Science</small>
                </div>
            </a>

            <nav class="main-navigation">
                <button class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="home menu-item<?php if ($selected == "index")
                        echo " current-menu-item"; ?>"><a href="index.php"><img src="images/home-icon.png"
                                alt="Home"></a></li>
                    <li class="menu-item<?php if ($selected == "projects")
                        echo " current-menu-item"; ?>"><a href="projects.php">Projects</a></li>
                    <li class="menu-item<?php if ($selected == "publication")
                        echo " current-menu-item"; ?>"><a href="publication.php">Publication</a></li>
                    <li class="menu-item<?php if ($selected == "teaching")
                        echo " current-menu-item"; ?>"><a href="teaching.php">Teaching</a></li>
                    <li class="menu-item<?php if ($selected == "team")
                        echo " current-menu-item"; ?>"><a href="team.php">Team</a></li>
                </ul>
            </nav>

            <div class="mobile-navigation"></div>
        </div>
    </div>
</header>