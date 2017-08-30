<?php 
	if(empty($_POST) === false){
		$errors = array();

		$name    = $_POST['name'];
		$email   = $_POST['email'];
		$message = $_POST['message'];

		if(empty($name) === true || empty($email) === true || empty($message) === true)
		{
			$errors[] = 'Please all fields below are required!';
		} else{
			if (ctype_alpha($name) === false) {
						$errors[] = 'I do not think there is a name contain numbers or symbols !!  let\'s do it again :)';
				  }		
			}
		if (empty($errors) === true) {
			mail('ghaithprincegh@gmial.com','Contact Form',$message,'From:' . $email);
			header('Location: contact.php?sent');
			exit();
		}

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Mohammad Ghaith Alseirawan">
	<meta name="description" content="personal website belong for Mohammad Ghaith Alseirawan">
	<!-- Site title
   ================================================== -->
	<title>Contact me</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB40SpXj1ce7e8p6fquI4h4FgvJnLxiKs8&callback=initMap">
</script>
	
</head>
<body>
<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.php">M.G</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                         <li><a href="index.php">Home</a></li>
                       	 <li><a href="about.php">About</a></li>
                       	 <!-- <li><a href="blog.html">Blog</a></li> -->
                       	 <li><a href="contact.php">Contact</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Contact me!</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">You're always welcome.</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<div id="map-canvas"></div>
			</div>
		</div>
 <!-- contact form  -->
		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Let's work together!</h1>
			<div class="contact-form">
			<?php
				if (isset($_GET['sent']) ===  true) {
					echo '<p class="alert alert-success">Thanks for contacting me :)<br> I\'m going to replay as soon as possible.</p>';
				}else{
				  if(empty($errors) === false){
				  	echo '<ul style="list-style: none;" class="alert alert-danger" >';
				  	foreach ($errors as $error) {
				  		echo '<li>', $error , '</li>';
				  	}
				  	echo '</ul>';
				  } 
			 ?>
				<form id="contact-form" method="post" action="">
					
					<input style="border: 1px solid #2c2b30;" name="name" type="text" class="form-control" placeholder="Your Name" required>

					<input style="border: 1px solid #2c2b30;" name="email" type="email" class="form-control" placeholder="Your Email" required>
					
					<textarea style="border: 1px solid #2c2b30;" name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
					
					<div class="contact-submit">
						<input type="submit" class="form-control submit" value="Send a message">
					</div>
					
				</form>
				<?php } ?>
			</div>
		</div>

		<div class="clearfix"></div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.3s">
					<div class="media-object pull-left">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Phone</h3>
						<p>+31 615488302</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.6s">
					<div class="media-object pull-left">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Email</h3>
						<p>ghaithprincegh@gmail.com</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.9s">
					<div class="media-object pull-left">
						<i class="fa fa-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Address</h3>
						<p>Netherland, Rotterdam</p>
					</div>
				</div>
			</div>

      </div>
   </div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s" style="color: white;">Copyright © 2017 M.G Alseirawan</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
				<li><a href="https://www.facebook.com/ghaith.prince.9" class="fa fa-facebook"></a></li>
				<li><a href="https://www.linkedin.com/in/mg-alsirawan-3b4295129/" class="fa fa-linkedin"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>