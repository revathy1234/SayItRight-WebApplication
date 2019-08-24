<?php echo error_reporting(0);?>
<div id="wrapper">
<div id="about">
	<center style="color: black;font-family:verdana"><h3>Buy From Us</h3></center>
</div>
<div style="margin-left: 250px;">
    <?php if(isset($message)) { ?>
      <h3 style="color: green;margin-left: 10px;">Data inserted successfully</h3>
    <?php } ?>
    <?php echo validation_errors(); ?>
  </div>
<div id="div2" style="margin-left: -150px;margin-top: 50px;float: left;">
  
<?php echo form_open('Cart_controller/form/uri'); ?>
<form action="" method="POST">
  	<label for="fname" style="margin-left: 290px;margin-top:20px;position: absolute; font-family: verdana; font-size: 22;" >Contact information</label><br>
    <input style="width:51%;height: 2%;" type="text" id="fname" name="emailid" placeholder="Enter Email">
  	<label for="fname" style="margin-left: -480px; margin-top:82px; position: absolute; font-family: verdana; font-size: 22;">Shipping address</label><br>
    <input style="width:25%;height: 2%" type="text" id="fname" name="firstname" placeholder="Enter First Name"><input style="width:25%;height: 2%;margin-left: 540px; margin-top: -44px" type="text" id="lname" name="lastname" placeholder="Enter Last Name">
  	
  	<input style="width:51%;height: 2%" type="text" id="fname" name="address" placeholder="Enter Address">

  	<input style="width:51%;height: 2%" type="text" id="fname" name="apt" placeholder="Enter Apartment,suite,etc">
 <select style="margin-left:300px;margin-top: 34px;font-family: verdana; font-size: 17;width: 20%">
  <option value="english">English</option>
  <option value="hindi">Hindi</option>
  <option value="spanish">Spanish</option>
  <option value="tamil">Tamil</option>
</select>
  	<input style="width:25%;height: 2%; margin-left:540px;margin-top: -25px " type="text" id="fname" name="zip" placeholder="Enter Postal Code">
  	
    <button id="button2" style="height: 5%;width: 15%;margin-top:50px; margin-left: 600px">SEND MESSAGE</button>
<?php echo form_close(); ?>
</form>
</div>
<div id="whitebuy" style="margin-left: 150px; float: right;margin-top: -350px">
<table cellspacing="35">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Units</th>
		<th>Price</th>
	</tr>

  <?php foreach($events as $eve){?>
        
        <tr>
          <td><img style="width: 32%; height: 5%;" src="<?php echo base_url('assets/images/'.$eve->id);?>"></td>
          <td><?=$eve->name;?></td>
          <td><?=$eve->unit;?></td>
          <td><?=$eve->price;?></td>
        </tr> 

  <?php } ?>


	<tr>
		<td colspan="3"> total</td>
	</tr>

</table>
</div>
