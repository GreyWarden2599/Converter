<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Converter</title>

	<link rel="stylesheet" href="css/main-config.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<header class="site-header container animated fadeInDown">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-4">
					<div class="site-branding">
						<h1 class="unselectable">true KVLT converter</h1>
					</div>
				</div>
				<a href="#" class="toggle-nav hidden-md hidden-lg">
					<i class="fa fa-bars"></i>
				</a>
				<div class="col-md-8">
					<nav id="nav" class="main-navigation hidden-xs hidden-sm">
						<ul class="main-menu">
							<li><a class="show-1 active homebutton" href="#">CONVERT</a></li>
							<li><a class="show-2 aboutbutton" href="#">ABOUT US</a></li>
							<li><a class="show-5 contactbutton" href="#">CONTACTS</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
							<li><a class="show-1 active homebutton" href="#">Home</a></li>
							<li><a class="show-2 aboutbutton" href="#">About Us</a></li>
							<li><a class="show-5 contactbutton" href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	
	<div id="menu-container">
		<div id="menu-1" class="homepage home-section container">
			<div class="home-projects">
				<div class="row">
				
					<div class="col-md-5">
						<div class="project-title animated fadeInUp">
										
							<form action="upload.php" method="POST" enctype="multipart/form-data">
							<h1>EXTRACT</h1><br/><br/>
							<input type="file" name="file" class="inputfile"><br/>
							<h3>EXTRACT &nbsp;
							<input type="number" name="time-last" min="0" max="900" step="1" class="seconds">
							 SECONDS,&nbsp; STARTING &nbsp; AFTER&nbsp; &nbsp;
							<input type="number" name="time-first" min="0" max="900" step="1" class="seconds">
							'S SECOND&nbsp;</h3><br/><br/><br/>
							<button type="submit" name="submit" class="upload-button">EXTRACT</button>

							</form>	
						</div>
						
						<div class="project-title animated fadeInUp">
							<form action="upload_two_files.php" method="POST" enctype="multipart/form-data">
							<h1>MERGE</h1><br/><br/>
							<h3>AFTER THIS FILE</h3><br/>
							<input type="file" name="first-file" class="inputfile"><br/>
							<h3>THIS FILE</h3>
							<input type="file" name="second-file" class="inputfile"><br/><br/>
							<button type="submit" name="TFsubmit" class="upload-button">MERGE</button>		
							</form>	
						</div>

					</div>
					
				</div>
			</div>
		</div>

		<div id="menu-2" class="content about-section container">
			<div class="our-story">
				<div class="story-bg animated fadeIn"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="inner-story animated fadeInRight text-center">
							<h2>TRUE KVLT</h2>
							<p>"TRUE KVLT" is punk-way-going company, who provides people with music software fo free. Please, enjoy our service. IF you WANT to support us, go on and buy some staff for YOURSELF in our new shop. See you later ;)</p>
						</div>
					</div>
				</div>
			</div>
			<div class="our-offers">
				<div class="offer-bg animated fadeIn"></div>
				<div class="offer-header">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="offer-title animated fadeInDown">
								<h2>OUR SERVICES</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="offer-holder">
						
						<div class="col-md-6">
							<a href="index.php"><div class="offer-item offer-1 animated fadeInLeft">
								<figure>
									<img src="img/a1.jpg" alt="">
								</figure>
			
							</div></a>
						</div>
						
						<div class="col-md-6">
							<a href="index.php"><div class="offer-item offer-2 animated fadeInRight">
								<figure>
									<img src="img/a2.jpg" width=1000 height=475 alt="">
								</figure>
								
							</div></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div id="menu-5" class="content contact-section container">
			<div class="contact-header text-center">
				<h2 class="animated fadeInLeft">Get in Touch</h2>
				<p class="animated fadeInRight">Feel free to talk to us about anything.</p>
				<ul class="contact-social animated fadeInUp">
					<li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
					<li><a href="instagram.com"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
				</ul>
			</div>
			<div class="contact-holder">
				<div class="row">
					<div class="col-md-6 col-sm-12">
			            <div class="googlemap-wrapper animated fadeInLeft">
                            <div id="map_canvas" class="map-canvas"></div>
                        </div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="contact-form animated fadeInUp">
							<h4>Send us a Message</h4>
							<div class="row">
								<fieldset class="col-md-6">
									<input type="text" name="name" placeholder="Your name">
								</fieldset>
								<fieldset class="col-md-6">
									<input type="email" name="email" placeholder="Your name">
								</fieldset>
								<fieldset class="col-md-12">
									<input type="text" name="subject" placeholder="Subject">
								</fieldset>
								<fieldset class="col-md-12">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Describe your point"></textarea>
								</fieldset>
								<fieldset class="col-md-12">
									<a href="#" class="message-button">Submit Message</a>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer class="site-footer container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="main-footer">
					<ul class="social">
						<li><a href="https://facebook.com">Facebook</a></li>
						<li><a href="https://twitter.com">Twitter</a></li>
						<li><a href="https://instagram.com">Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 copyright">
				<p class="unselectable">Copyright &copy; 2020 ХРТК</p>
			</div>
		</div>
	</footer>

	<span class="border-top"></span>
	<span class="border-left"></span>
	<span class="border-right"></span>
	<span class="border-bottom"></span>
	<span class="shape-1"></span>
	<span class="shape-2"></span>

	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script src="jquery.fileuploader.min.js"></script>
</body>
</html>