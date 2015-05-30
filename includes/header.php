<?php
require(__DIR__.'/globals.php');
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Girl Develop It SLC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=$MAINPATH?>includes/images/favicon.ico">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=$MAINPATH?>includes/css/styles.css">
    <link rel="stylesheet" href="<?=$MAINPATH?>includes/css/nav.css">
</head>
<body>
	<div id="main_body">
		<header>
			<a href="<?=$MAINPATH?>index.php"><span class="bold" id="gdi_text">Girl Develop It SLC</span><img src="<?=$MAINPATH?>includes/images/circle-gdi-logo-235w.png" id="gdi_logo" /></a>
			<ul class="social_media">
				<li><a href="http://www.meetup.com/Girl-Develop-It-Salt-Lake-City/" target="_blank"><i class="fa fa-calendar"></i></a></li>
				<li><a href="https://twitter.com/gdiSLC" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/gdislc" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
				<li><a href="http://www.linkedin.com/groups?gid=6630862" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			</ul>
			<span id="join_us_header" type="button" class="btn"><a href="http://www.meetup.com/Girl-Develop-It-Salt-Lake-City/" target="_blank">Join Us</a></span>
			<ul id="quick_links">
				<!--<li class="bold"><a href="https://docs.google.com/forms/d/1NMKQmjv1rkwfyQovEnzfA12kedAraMMZoXhTUGZygHk/viewform" target="_blank">Community Survey</a></li>-->
				<!--<li><a href="<?=$MAINPATH?>" target="_blank">Mentorship (Create)</a></li>-->
				<li class="bold"><a href="<?=$MAINPATH?>pages/howyoucanhelp.php" target="_blank">How You Can Help</a></li>
				<li><a href="https://docs.google.com/a/girldevelopit.com/forms/d/1QvhrlamutZIP8mmBldHDkPEeGwcS4UQuzOvDPlxMW84/viewform" target="_blank">Scholarships</a></li>
				<!--<li><a href="<?=$MAINPATH?>" target="_blank">Contact Us (Create)</a></li>-->
			</ul>
		</header>
		<div id="main_info">
			<nav id="cssmenu">
				<ul>
					<li><a class="no_link"><span>Get Involved</span></a>
						<ul>
							<li><a href="<?=$MAINPATH?>pages/howyoucanhelp.php">How You Can Help</a></li>
							<li><a href="<?=$MAINPATH?>pages/sponsors.php">Sponsor Us</a></li>
						</ul>
					</li>
					<li><a class="no_link"><span>Connect</span></a>
						<ul>
							<!--<li><a href="<?=$MAINPATH?>pages/local_user_groups.php">Local User Groups</a></li>-->
							<li><a href="<?=$MAINPATH?>pages/women_in_tech.php">Women in Tech</a></li>
							<li><a href="<?=$MAINPATH?>pages/tech_conferences.php">Tech Conferences</a></li>
							<li><a href="<?=$MAINPATH?>pages/local_tech_events.php">Local Tech Events</a></li>
						</ul>
					</li>
					<li><a class="no_link"><span>Learn</span></a>
						<ul>
							<!--<li><a href="<?=$MAINPATH?>pages/online_resources.php">Online Resources</a></li>-->
							<li><a href="<?=$MAINPATH?>pages/kids_STEM.php">Kids STEM Resources</a></li>
							<!--<li><a href="<?=$MAINPATH?>pages/local_bootcamps.php">Local Bootcamps</a></li>-->
						</ul>
					</li>
					<li><a class="no_link"><span>Work</span></a>
						<ul>
							<!--<li><a href="<?=$MAINPATH?>pages/startup_support.php">Startup Support</a></li>-->
							<!--<li><a href="<?=$MAINPATH?>pages/freelancing.php">Freelancing Sites</a></li>-->
							<!--<li><a href="<?=$MAINPATH?>pages/jobsearching.php">Job Searching Sites</a></li>-->
							<li><a href="<?=$MAINPATH?>pages/local_tech_companies.php">Local Tech Companies</a></li>
						</ul>
					</li>
					<li><a href="<?=$MAINPATH?>pages/about.php"><span>About</span></a></li>
				</ul>
			</nav>