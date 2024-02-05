<?php 
$header = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">   
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href ="css/findscratch.css">';
		
$headfindability = '<title>Home - Findability</title>
</head>
<body>
	<div id="outer">
	<header>
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Findability</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';
			
$headblog = '<title>Blog - Findability</title>
</head>
<body>
	<div id="outer">
	<header id="articlesheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Blog</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';

$headpractices = '
<title>Best Practices - Findability</title>
</head>
<body>
	<div id="outer"><header id="shopheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Practices</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';
			
$headresearch = '
<title>Research Topic - Findability</title>
</head>
<body>
	<div id="outer"><header id="cartheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Research</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';
		
$headresources = '
<title>Resources - Findability</title>
</head>
<body>
	<div id="outer"><header id="aboutusheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Resources</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';

$headvocabulary = '
<title>Vocabulary - Findability</title>
</head>
<body>
	<div id="outer"><header>
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Vocabulary</h1>
			<h1 id="crystaltowerheader2"></h1>
			</div>';
			
$headabout = '
<title>About - Findability</title>
</head>
<body>
	<div id="outer"><header id="errorheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">About</h1>
			<h1 id="crystaltowerheader2"></h1></div>';
			
$head404page = '
<title>Error 404 - Findability</title>
</head>
<body>
	<div id="outer"><header id="errorheader">
		<ul class="skip-links">
		<li><a href="#headernav">Skip to navigation</a></li>
		<li><a href="#main">Skip to main content</a></li>
		<li><a href="#footer">Skip to footer navigation</a></li>
		</ul>
			<div id="crystaltowerheaderdiv"><h1 id="crystaltowerheader">Error 404</h1>
			<h1 id="crystaltowerheader2">Made a wrong turn?</h1></div>';
			
$nav = '<nav id="headernav"> 
			<a id="logoposition" href="index.php"><picture id="logopicture"></picture></a>
			<ul>				
				<li><a href="blog.php">Blog</a></li>
				<li><a href="practices.php">Practices</a></li>
				<li><a href="research.php">Research</a></li>
				<li><a href="resources.php">Resources</a></li>
				<li><a href="vocabulary.php">Vocab</a></li>	
				<li><a href="about.php">About</a></li>
			</ul>
			</nav>';

$main ='</header>
	
		<main id="main">';
			
$footer = '</main>
	
		<footer id="footer">
			<div id="topskipdiv"><a href="#outer" id="topskip"><img src="images/warrow.png" alt="Back to Top" id="topskipimg"></img></a></div>
			<nav id="footernav"> 
				<ul>
					<li><a href="index.php">About Us</a></li>
					<li><a href="index.php">Privacy policy</a></li>  
					<li><a href="index.php">Terms of service</a></li>
					<li><a href="index.php">Findability</a></li>
					<li><a href="index.php">Sitemap</a></li>
				</ul>
			</nav>
				<p id="footerp">
					<a href="https://www.instagram.com/"><img src="images/iconinstagram.png" alt="instagramlogo"></a>
					<a href="https://www.pinterest.com/"><img src="images/iconpinterest.png" alt="pinterestlogo"></a>
					<a href="https://www.facebook.com/"><img src="images/iconfacebook.png" alt="facebooklogo"></a>
					<a href="https://twitter.com/"><img src="images/icontwitter.png" alt="twitterlogo"></a>
				</p>	
			<div id="rightsreserved"><h5>© 2022 Crystal Tower - all rights reserved</h5></div>
		</footer>
	</div>
<script src="js/script.js"></script>
</body>
</html>';