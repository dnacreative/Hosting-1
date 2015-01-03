<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>

		<?php wp_head(); ?>
</head>

	<?php

		$home = false;
		$about = false;
		$support = false;
		$services = false;
		$projects = false;
		$contact = false;

		$page = $_SERVER['REQUEST_URI'];
		$page = str_replace("/", "", $page);
		$page = str_replace(".php", "", $page);
		$page = str_replace("?s=", "", $page);
		$page = $page ? $page : 'default';

		switch ($page) {
			case 'wordpress':
				$home = true;
				break;
			case 'wordpressabout-us':
				$about = true;
				break;
			case 'wordpresssupport':
				$support = true;
				break;
			case 'wordpressservices':
				$services = true;
				break;
			case 'wordpressprojects':
				$projects = true;
				break;
			case 'wordpresscontact-us':
				$contact = true;
				break;
			default:
				# code...
				break;
		}

	?>


<body id="<?php echo $page ?>">
	<div id="container">
		
		<div class="header">
			<div class="logo floatl"><a href="<?php echo bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.gif" alt="" /></a>
			</div>
			<div class="top-links floatr">
				<ul>
					<li class="home"><a href="<?php echo bloginfo('url');?>" class="<?php if($home){echo active;} ?>"><span>Home</span></a></li>
					<li class="about-us"><a href="<?php echo bloginfo('url');?>/about-us" class="<?php if($about){echo active;} ?>"><span>About Us</span></a></li>
					<li class="services"><a href="<?php echo bloginfo('url');?>/services" class="<?php if($services){echo active;} ?>"><span>Services</span></a></li>
					<li class="support"><a href="<?php echo bloginfo('url');?>/support" class="<?php if($support){echo active;} ?>"><span>Support</span></a></li>
					<li class="portfolio"><a href="<?php echo bloginfo('url');?>/projects" class="<?php if($projects){echo active;} ?>"><span>Portfolio</span></a></li>
					<li class="contact-us" style="background:none;"><a href="<?php echo bloginfo('url');?>/contact-us" class="<?php if($contact){echo active;} ?>"><span>Contact</span></a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="header-text"><img src="<?php echo get_template_directory_uri();?>/images/header-text-img.gif" alt="" /></div>
			<div class="clear"></div>
			<div class="services-list floatr">
				<ul>
					<li><img src="<?php echo get_template_directory_uri();?>/images/services-list-icon1.gif" alt="" class="floatl" /><a href="#" class="floatl">Website Design</a>
						<div class="clear"></div>
					</li>
					<li><img src="<?php echo get_template_directory_uri();?>/images/services-list-icon2.gif" alt="" class="floatl" /><a href="#" class="floatl">Website Development</a>
						<div class="clear"></div>
					</li>
					<li><img src="<?php echo get_template_directory_uri();?>/images/services-list-icon3.gif" alt="" class="floatl" /><a href="#" class="floatl">Apps &amp; Frameworks</a>
						<div class="clear"></div>
					</li>
					<li><img src="<?php echo get_template_directory_uri();?>/images/services-list-icon4.gif" alt="" class="floatl" /><a href="#" class="floatl">Branding</a>
						<div class="clear"></div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>