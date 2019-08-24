
<body background="<?php echo base_url('assets/images/home-banner.jpg'); ?>" style="overflow: scroll;visibility: visible">
<div id="wrapper">
	<div id="about2">
		<center style="font-size: 8;margin-left: 230px;">Home  →  LOGIN</center>
		<br>
		<h2 style="margin-left: 230px;">LOGIN</h2>
	</div>
	</div>
		<div id="white" style="padding-bottom: 270px">
      

	    	<hr style=" border-style: inset; border-width: 0.61px; margin-left: -130px">
<form method="POST" action="<?php echo site_url('Login_controller/login_validation/uri'); ?>" style="margin-left:140px; margin-top: 200px">
  <?php echo form_open('Login_controller/login_validation/uri'); ?>
    <input style="width:40%" type="text" id="fname" name="mail" placeholder="Enter email">
    <br>
    <input style="width:40%" type="text" id="lname" name="password" placeholder="Enter password">
  	<br>
  	<br>
  	<br>
    <input type="submit" id="button2" style="height: 10%;width: 6%;margin-bottom:0px; margin-left: 700px" value="SEND"/>
    <?php echo form_close(); ?>
  </form>
    <?php
    echo $this->session->flashdata("error")
    ?>
    <br>
    <br>
        	<hr style=" border-style: inset; border-width: 0.5px; margin-left: -130px">

	</div>
