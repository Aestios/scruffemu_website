<!DOCTYPE html>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content ="Dofus,1.29,english,private,server,vindictive,trance,vtrance">
<title>Herofus</title>
<meta name="description" content="">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	    
	    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	    <link href="css/animate.css" rel="stylesheet" type="text/css" />
	    <script type="text/javascript" src="js/active.js"></script>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/dropdown.js"></script>
		<script type="text/javascript" src="js/tab.js"></script>
		<script type="text/javascript" src="js/collapse.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
  </head>
  <body>
<div class="header"> 
				<div class="wrap">
				<!--start-top-nav---->
				<div class="top-header animated bounceInDown">
					<!---start-logo---->
					<div class="logo">
						<a href="index.php" class="LogoText">Herofus</a>
					</div>
					<!---End-logo---->
					<!---start-top-nav---->
					
					<div class="top-nav" id="navigation">
						<ul>
								<li><a href="index.php?p=home">Home</a></li>
								<?php if(!isset($_SESSION['id'])) 
								{
									echo '<li><a href="index.php?p=register">Register</a></li>
								<li><a href="index.php?p=connexion">Log in</a></li>
								<li><a href="index.php?p=join">How to Join</a></li>
									<li><a href="index.php?p=drops">Drops</a></li>
								<li><a href="http://129dofus.com/w/Home">Wiki</a></li>
								';
								}
								else 
								{ 
								echo '<li role="presentation" class="dropdown">
								<a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								My Account
								<span class="caret"></span>
								</a>
								<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
								<li role="presentation" style="width: 100%;z-index: 1001;"><a href="index.php?p=change_pass" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Change password</a></li>
								<li role="presentation" style="width: 100%;z-index: 1001;"><a href="index.php?p=my_tickets" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Manage my tickets</a></li>
								<li role="presentation" style="width: 100%;z-index: 1001;"><a href="index.php?p=logout" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Sign Out</a></li>
								</ul></li>
								<li><a href="index.php?p=drops">Drops</a></li>
								<li><a href="http://129dofus.com/w/Home">Wiki</a></li>
								'; 
								} ?>
								<li role="presentation" class="dropdown">
        <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          Community
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          <li role="presentation" style="width: 100%;"><a href="index.php?p=staff" tabindex="500" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Our team</a></li>
          <li role="presentation" style="width: 100%;z-index: 1001;"><a href="index.php?p=classements" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Ladders</a></li>
          <li role="presentation" style="width: 100%;z-index: 1001;"><a href="https://discord.gg/Fg52GeR" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Discord</a></li>
		<li role="presentation" style="width: 100%;z-index: 1001;"><a href="index.php?p=faq" tabindex="1001" style="font-size: 15px;color: #333;padding: 5px;display: block;padding: 3px 20px;clear: both;font-weight: 400;line-height: 1.42857143;color: #333;white-space: nowrap;">Frequently Asked Questions</a></li>
		</ul>
      </li>
	  <?php>
	  <li><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	  <input type="hidden" name="cmd" value="_s-xclick" />
      <input type="hidden" name="hosted_button_id" value="N8GNTD854F3ZQ" />
	  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
	  <img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
	  </form></li>
	  ?>
	  
								
							
						</ul>
					</div>
					
					<div class="clear"> </div>
					<!---//End-top-nav---->
				</div>
				<!--End-top-nav---->
				<!---start-da-slider----->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><?php echo $slider1['name']; ?></h2>
					<p><?php echo $slider1['description']; ?></p>
				</div>
				<div class="da-slide">
					<h2><?php echo $slider2['name']; ?></h2>
					<p><?php echo $slider2['description']; ?></p>
				</div>
				<div class="da-slide">
					<h2><?php echo $slider3['name']; ?></h2>
					<p><?php echo $slider3['description']; ?></p>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
					
				
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
				<!---//End-da-slider----->
			</div>
			<!--//End-header---->
		</div>
