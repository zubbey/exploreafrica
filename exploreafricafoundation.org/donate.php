<?php include_once 'validate.php';?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ColoreDigital inc">
	<!-- Meta Description -->
	<meta name="description" content="Explore Africa Foundation is an African content focused organization involved in creating resource development and capacity building solutions across gender-lines through utilization of multi-racial and multi-dimensional change management techniques and social transformation advocacy.">
	<!-- Meta Keyword -->
	<meta name="keywords" content="meta, metatags, meta tag, meta tags, submit, search engines, ngo, non-governmental organization, Non-Profit Organization, sites, submit site, search engine submit, website, submit website, add meta tags, find website, be found on internet, keywords, keyword,explore, explore africa, explore africa foundation, foundation, ColoreDigital, support, payment, donation, donate, help ">
	<meta charset="UTF-8">
	<!-- meta character set -->
	<!-- Site Title -->
	<title>Explore Africa Foundation | Donate</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- fav icon for multi Platform 
	================================================ -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
	<link rel="manifest" href="img/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!--
	CSS
	============================================= -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">							
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">			
	<link rel="stylesheet" href="css/jquery-ui.css">			
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="donate/donate.css">
	<!-- <link rel="stylesheet" type="text/css" href="donate/payment.css"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="https://js.paystack.co/v1/inline.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="https://js.paystack.co/v1/inline.js"></script>
	<script src="donate/main.js"></script>
				
</head>
<body>
	<div id="modal" class="<?php echo $display_pay;?>">
		<div class="row_pay">
			<div class="col_pay">
				<div class="h4">Thank you for supporting</div>
				<div class="p lead">please enter payment details</div>
			</div>
			<input onclick="payWithPaystack();" id="pay_btn" name="pay_btn" type="button" value="CARD DETAILS"/>
		</div>
	</div>

	<style type="text/css">.nav li a:focus, .nav li a:hover{background-color:none;}</style>
	<header id="header" id="home">
		<div class="header-top">
	  		<div class="container">
			  	<div class="row">
			  		<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
		  				<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		  				</ul>			
			  		</div>
			  		<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
		  				<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+234 803 747 8593</span></a>
		  				<a href="mailto:info@exploreafricafoundation.org"><span class="lnr lnr-envelope"></span> <span class="text">join@exploreafricafoundation.com</span></a>			
			  		</div>
			  	</div>			  					
	  		</div>
		</div>
		<div class="container main-menu">
		    <div class="row align-items-center justify-content-between d-flex">
		    	<div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="Explore Africa Foundation" title="Home" /></a>
			    </div>
			    <nav id="nav-menu-container">
			        <ul class="nav-menu">
			           <li><a href="index.php">Home</a></li>
			           <li><a href="about.php">About</a></li>
			          <li class="menu-has-children"><a href="programme.php">Programmes</a></li>
			          <li><a href="events.php">Events</a></li>
			          <li><a href="gallery.php">Gallery</a></li>
			          <li><a href="contact.php">Contact</a></li>
			          <li type="button" class="btn btn-danger"><a href="donate.php">Donate <span class="glyphicon glyphicon-heart"></span></a></li>
			        </ul>
			    </nav>
		    </div>			
		</div>
	</header>
	<!-- start banner Area -->
	<section class="banner-area-donate relative about-banner-donate" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Donate to end <br>social vices in Africa		
					</h1>	
					<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="donate.php"> Donate</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<!-- Start Payment form -->
	<section class="auto">
		<div class="col">
			<div class="alert alert-success text-center" style="background: #ffffff; border: none;">
				<?php echo $message;?>
			</div>
		</div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">	
			<div id="payOptions" class="row ">

			<div class="h5 line-break">OR</div>

			<div class="col">
			  <p class="h5">Donate an amount</p>
			  <div id="first_form-row" class="form-row"> 
				  <button type="submit" name='btn1' class="btn btn-secondary btn-lg">&#36; 25</button>
				  <button type="submit" name='btn2' class="btn btn-secondary btn-lg">&#36; 40</button>
				  <button type="submit" name='btn3' class="btn btn-secondary btn-lg">&#36; 100</button>
				  <button type="submit" name='btn4' class="btn btn-secondary btn-lg">&#36; 300</button>
				  <button type="submit" name='btn5' class="btn btn-secondary btn-lg">&#36; 500</button>  
				  <input class="bold" name='amount_d' id="amount_d" value="USD: <?php echo $S_amount.'.00'?>" autocomplete="off" disabled >
			  </div>
			</div>
<!-- <//php echo "USD: ".$S_amount.".00"> -->
			<div class="line1"></div>

			<div class="col">
			<p class="h5">other amount</p>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text">$</span>
			  </div>
			  <input name='other' type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Your Own Amount" value="<?php echo $S_amount;?>">
			  <div class="input-group-append">
			    <span class="input-group-text">.00</span>
			  	<!-- <button name="setbtn" type="submit" class="btn btn-secondary">Set amount</button> -->
			  </div>
			</div>
			</div>
			</div>

		<div class="full-w-b">

			<div id="payDetails" class="row">
				<div class="col">
				  <p class="h5">Enter Personal Details</p>
			      <div id="check1" class="custom-control custom-checkbox">
					  <input name="checkbox1" type="checkbox" class="custom-control-input" id="customCheck1">
					  <label class="custom-control-label" for="customCheck1">Donate Anonymously</label>
				  </div>
				  <div id="check2" class="custom-control custom-checkbox">
					  <input name="checkbox2" type="checkbox" class="custom-control-input" id="customCheck2">
					  <label class="custom-control-label" for="customCheck2">Preceive Information</label>
				  </div>
				  <div class="form-row">
				    <div class="col">
				      <span class="error">* <?php echo $firstnameErr;?></span>
				      <input name='fname' type="text" class="form-control" placeholder="First name" value="<?php echo $firstname;?>">
				    </div>
				    <div class="col">
				      <span class="error">* <?php echo $lastnameErr;?></span>
				      <input name='lname' type="text" class="form-control" placeholder="Last name" value="<?php echo $lastname;?>">
				    </div>
				  </div>
				  <div class="form-row form-group ">
				    <div class="col-md-9">
				      <span class="error">* <?php echo $stateErr;?></span>
				      <input name='state' type="text" class="form-control" for="inputCity" id="inputCity" placeholder="State / Country" value="<?php echo $state;?>">
				    </div>
				    <div class="col-md-3">
				      <span class="error">* <?php echo $postalErr;?></span>
				      <input name='postal' type="text" class="form-control" for="inputZip" id="inputZip" placeholder="Postal Code" value="<?php echo $postal;?>">
				    </div>
				  </div>
				  <div class="form-row input-group">
				  	<div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroupFileAddon01">Choose Campaign</span>
					 </div>
				  	<select name='choose' class="custom-select custom-select required">
					  <option selected>Schools Educational outreach</option>
					  <option value="1">Youth Enterprise Development</option>
					  <option value="2">Skills acquisition programme</option>
					  <option value="3">Electral Violence & Drug Abuse Campaign</option>
					</select>
				  </div>
				</div>
				<div class="line2"></div>
				<div class="col">
			      <p class="h5">Enter your email</p>
			      <span class="error">* <?php echo $emailAddressErr;?></span>
			      <div class="form-row input-group">
			      	<div class="input-group-prepend">
			          <div class="input-group-text">@</div>
			        </div>
					<input name='email' type="text" class="form-control" placeholder="Enter Email Address" value="<?php echo $emailAddress;?>">
			  		<!-- <button name="emailbtn" type="submit" class="btn btn-secondary">Submit</button> -->

			      </div>
			      <dl id="info" class="col input-group">
			      	<dt class="col-md-3 h5">Programme Description</dt> 
						<dd class="col-md-9 justify-content-center">EAF runs a highly flexible and cooperative span of control so that our workspace is not stifled up by some unnecessary bureaucracy that most times delays work execution, dwindles employee motivation, and discourages effective team work.</dd>
			      </dl>
			      <input  name="give_btn" type="submit" class="btn btn-secondary btn-lg left" value="GIVE NOW"/>
			    </div>			    
			</div>
		  </div> <!-- full background width start here -->
		</form> <!-- Personal information for database -->
	</section>

	<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Up Coming Campaign</h4>
							<ul>
								<li><a href="#">Electral Violence & Drug Abuse Campaign.</a></li>
								<li><a href="#">Youth Konnect for Peace Network 2019 Summer Bootcamp.</a></li>
							</ul>								
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Regular Speakers</h4>
							<ul>
								<li><a href="#">Emmanuel Ogbumgbada</a></li>
								<li><a href="#">Isah Likita Mohammed</a></li>
								<li><a href="#">Ankara Craft Workshop</a></li>
								<li><a href="#">Joshua I. Kajang</a></li>
								<li><a href="#">Coloredream inc.</a></li>
							</ul>								
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Acheivement</h4>
							<ul>
								<li><a href="#">Expore Africa Magazine</a></li>
								<li><a href="#">Documentary</a></li>
								<li><a href="#">Our Community</a></li>
								<li><a href="about.php">Testimonies</a></li>
							</ul>								
						</div>
					</div>																		
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Newsletter</h4>
							<p>Stay update with our latest Campaign</p>
							<div class="" id="mc_embed_signup">
								 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
								  <div class="input-group">
								    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
								    <div class="input-group-btn">
								      <button class="btn btn-default" type="submit">
								        <span class="lnr lnr-arrow-right"></span>
								      </button>    
								    </div>
								    	<div class="info"></div>  
								  </div>
								</form> 
							</div>
						</div>
					</div>											
				</div>
				<div class="footer-bottom row align-items-center justify-content-between">
					<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="exploreafricafoundation.org"> Explore Africa Foundation </a>Non-Profit Organization. <!-- <i class="fa fa-heart-o" aria-hidden="true"></i>  -->Developed by <a href="https://coloredigital.com" target="_blank">ColoreDigital inc</a> &amp; distributed by <a href="https://ibrandafrica.com" target="_blank">iBrand Africa</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-6 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>						
			</div>
	</footer>	
			<!-- End footer Area -->	

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>			
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>			
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>	
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>	
	<script src="js/jquery.tabs.min.js"></script>						
	<script src="js/jquery.nice-select.min.js"></script>	
	<script src="js/owl.carousel.min.js"></script>									
	<script src="js/mail-script.js"></script>	
	<script src="js/main.js"></script>	
	<script src="donate/app.js"></script>

	<!-- <script type="text/javascript">
		function showAmt(count){
			document.getElementById('amount_d').value = count;
		}
	</script> -->
	<script>
		$(document).ready(function() {
		// 	var input1 = $('#amount_d');

	// 	$('#btn1').on('click', function() {
	// 		var div01 = $('#btn1').value ='25';
	// 	
	// 		console.log(div01);
	// 	});
	// 	$('#btn2').on('click', function() {
	// 		var div02 = $('#btn2').value ='4000';
	// 		console.log(div02);
	// 	});
	// 	$('#btn3').on('click', function() {
	// 		var div03 = $('#btn3').value ='10000';
	// 		console.log(div03);
	// 	});
	// 	$('#btn4').on('click', function() {
	// 		var div04 = $('#btn4').value ='30000';
	// 		console.log(div04);
	// 	});
	// 	$('#btn5').on('click', function() {
	// 		var div05 = $('#btn5').value ='50000';
	// 		console.log(div05);
	// 	});

		$('#modal').on('click', function(){
			$(this).fadeOut('500');
		});
	});

		function paystack(){
  		// alert("function call after submition");
  		payWithPaystack();
  		return false;
  	}

  	function payWithPaystack(){
  		var handler = PaystackPop.setup({
  			key: 'pk_live_bbbe431c147094b3ef0a4cbd5721831bd4850bc1',
  			email: '<?php echo $emailAddress;?>',
  			amount: <?php echo $S_amount;?> * 100,
  			currency: 'USD',
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
      	custom_fields: [
      	{
      		display_name: "Mobile Number",
      		variable_name: "mobile_number",
      		value: "+2348012345678"
      	}
      	]
      },
      callback: function(response){
      	alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
      	// alert('window closed');
      }
  });
  		handler.openIframe();
  	}
  </script>


</body>
</html>