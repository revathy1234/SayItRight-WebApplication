<!DOCTYPE html>
<html>
<head>
	<title> MyProject </title>
	<link rel="stylesheet" type="text/css" href="sayitright.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<header>
<div style="background-color:#191970; height:15%; width:100%">
<br>
<img src="<?php echo base_url('assets/images/logo.png'); ?>" height="50" width="110" style="margin-left:225px">
	<center>
		<nav>
			<a href="<?php echo site_url('Homepageindividual_controller/index/uri') ?>" name="AboutUs" id="links">HOME</a>
			<a href="<?php echo site_url('Conference_controller/display/uri') ?>" name="AboutUs" id="links">CONFERENCES</a>
			<a href="<?php echo site_url('Event_controller/display/uri'); ?>" name="AboutUs" id="links">EVENTS</a>
			<a href="<?php echo site_url('Myconference_controller/display/uri') ?>" name="AboutUs" id="links">MY CONFERENCES</a>
			<a href="<?php echo site_url('Myevent_controller/display/uri') ?>" id="links">MY EVENTS</a>
			<a href="<?php echo site_url('Profile_controller/index/uri') ?>" id="links">SETTINGS</a>
		</nav>
	</center>
<br>
</div>		
</header>
