<body background="home-banner.jpg" style="overflow: scroll;visibility: visible">
<div style="width=80%">
	<div id="about1">
		<center style="font-size: 8">Home  →  SIGN UP</center>
		<br>
		<h2>SIGN UP</h2>
	</div>
<div id="bigwhite2" style="height: 180%">
  <div style="margin-left: 550px">
  <?php if (isset($message)) { ?>
  <h3 style="color:green;margin-left:10px">Data inserted successfully</h3><br>
  <?php } ?>
  <?php echo validation_errors(); ?>
  </div>
<div id="div2" style="margin-left: 80px;margin-top: 50px">
<p><b><center style="font-size:30; font-family: verdana;color:#808080">Select the type of user</center></b></p>
<div>
  <form action="<?php echo site_url('Individualsignup_controller/index/uri'); ?>">
    <input type="submit" value="INDIVIDUAL" id="button2" style="height: 5%;width: 10%;margin-bottom:0px; margin-left: 270px;margin-top: 30px" />
	</form>
	<form action="<?php echo site_url('Eventsignup_controller/index/uri'); ?>">
  	<input type="submit" value="EVENT" id="button2" style="height: 6%;width: 10%;margin-bottom:0px; margin-left: 540px;margin-top: -75px"/>
	</form>
	<form action="<?php echo site_url('Businesssignup_controller/index/uri'); ?>">
  	<input type="submit" value="BUSINESS" id="button2" style="height: 10%;width: 10%;margin-bottom:0px; margin-left: 800px; 
  	margin-top: -87px; position: absolute;"/>
  </form>
  <br><br><br>
  <center><div id="commentprompt"></div></center>

  <hr style=" border-style: inset; border-width: 0.5px;">
</div>
<?php echo form_open('Individualsignup_controller/form/uri'); ?>
<form method="POST" action="">
  <p><center><font face="verdana" size="2">Welcome to the individual registration</font></center></p>
  <br>
  <br>
    <input style="width:50%;height: 5%;margin-top:-20px; margin-left: 350px" type="text" id="fname" name="firstname" placeholder="Enter your name" >
    <input style="width:50%;height: 5%;margin-top:30px; margin-left: 350px" type="text" id="lname"  name="lastname" placeholder="Enter last name" >
    <input style="width:50%;height: 5%;margin-top:30px; margin-left: 350px" type="text" id="pwork"  name="placework" placeholder="Enter place work" >
  	
  	<input style="width:50%;height: 5%;margin-top:30px; margin-left: 350px" type="text" id="sname"  name="schoolname" placeholder="Enter school" >

  	<input style="width:50%;height: 5%;margin-top:30px; margin-left: 350px" type="text" id="mail"  name="emailid" placeholder="Enter email">

  	<input style="width:50%;height: 5%;margin-top:30px; margin-left: 350px" type="text" id="pass" name="password" placeholder="Enter password">
  	
    <input type="submit" id="button2" style="height: 5%;width: 12%;margin-bottom:0px" value="SEND"/>
    <div id="commentprompt"></div>
    <?php echo form_close(); ?>
  </form>
</div>