<body>
<div id="wrapper">
	<div id="about2">
		<center style="font-size: 8;margin-left: 230px;">Home  →  CONTACT US</center>
		<br>
		<h2 style="margin-left: 230px;">CONTACT US</h2>
	</div>
	</div>
	<div style="margin-left: 550px">
	<?php if (isset($message)) { ?>
	<h3 style="color:green;margin-left:10px">Data inserted successfully</h3><br>
	<?php } ?>
	<?php echo validation_errors(); ?>
	</div>
	<br>
	<hr style=" border-style: inset; border-width: 0.5px; margin-left: 280px"/>
	<?php echo form_open('Contactus_controller/form/uri'); ?>
	<form style="margin-right:300px; margin-top: 0px" method="POST">
		<center><label id="lab1" style="margin-left: 150px"></label></center>
    <input type="text"  id="fname" onkeyup="fnameValidate()"  name="firstname" placeholder="Enter your name" >
    <br>
    <input type="text" id="lname"  onkeyup="lnameValidate()" name="lastname" placeholder="Enter Last Name">
    <br>
    <input type="text" id="telnum"  onkeyup="phoneValidate()" name="telephone" placeholder="Telephone">
    <textarea type="text" id="msg"  onkeyup="msgValidate()" name="messg" placeholder="Enter Message" style="width: 300px; height: 100px; margin-top: -250px"></textarea>
    <input type="submit" id="button2" style="height: 12%;width: 12%;margin-bottom:0px" value="SEND MESSAGE"/>
    <?php form_close(); ?>
	</form>
  	<br>
  	<br>
  	    	

  </form>