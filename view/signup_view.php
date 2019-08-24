
<body background="<?php echo base_url('assets/images/home-banner.jpg'); ?>" >
	<div id="wrapper2">
	<div id="about2">
		<center style="font-size: 8;margin-left: -80px;">Home  →  SIGN UP</center>
		<br>
		<h2 style="margin-left: -80px;">SIGN UP</h2>
	</div>
<div id="bigwhite1" style="height: 70%">
<div id="div2" style="margin-left: 80px;margin-top: 50px">
<p><b><center style="font-size:30; font-family: verdana;color:#808080">Select the type of user</center></b></p> 
<div>
	<form action="<?php echo site_url('Individualsignup_controller/index/uri'); ?>">
    <input type="submit" value="INDIVIDUAL" id="button2" style="height: 12%;width: 10%;margin-bottom:0px; margin-left: 270px;margin-top: 30px" />
	</form>
	<form action="<?php echo site_url('Eventsignup_controller/index/uri'); ?>">
  	<input type="submit" value="EVENT" id="button2" style="height: 12%;width: 10%;margin-bottom:0px; margin-left: 540px;margin-top: -70px"/>
	</form>
	<form action="<?php echo site_url('Businesssignup_controller/index/uri'); ?>">
  	<input type="submit" value="BUSINESS" id="button2" style="height: 9%;width: 10%;margin-bottom:0px; margin-left: 800px; 
  	margin-top: -87px; position: absolute;"/>
  	</form>
  <br><br><br>
  <hr style=" border-style: inset; border-width: 0.5px;">
</div>
</div>
</div>
