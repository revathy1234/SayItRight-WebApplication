
<div id="wrapper">
	<div id="about2">
		<center style="font-size: 8;margin-left: 230px;">Home  →  BUY FROM US</center>
		<br>
		<h2 style="margin-left: 230px;">BUY FROM US</h2>
	</div>
<div id="bigwhite">

<div>
<?php echo form_open('Buyfromus_controller/add1/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/franela1.jpg'); ?>" alt="Cinque Terre" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button name="add1" id="button">Add to cart</button></center></div>
</div>
<?php echo form_close(); ?>
</form>
<?php echo form_open('Buyfromus_controller/add2/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/taza1.png'); ?>" alt="Forest" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button name="add2" id="button">Add to cart</button></center></div>
</div>
<?php echo form_close(); ?>
</form>
<?php echo form_open('Buyfromus_controller/add3/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/franela2.jpg'); ?>" alt="Tshirt" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button name="add3" id="button">Add to cart</button></center></div>
</div>
</div>
<?php echo form_close(); ?>
</form>
<div style="margin-top: 480px">
<?php echo form_open('Buyfromus_controller/add4/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/taza2.png'); ?>" alt="Cinque Terre" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button name="add4" id="button">Add to cart</button></center></div>
</div>
<?php echo form_close(); ?>
</form>
<?php echo form_open('Buyfromus_controller/add5/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/franela3.jpg'); ?>" alt="Mountains" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button name="add2" id="button">Add to cart</button></center></div>
</div>
<?php echo form_close(); ?>
</form>
<?php echo form_open('Buyfromus_controller/add6/uri'); ?>
<form method="POST" action="">
<div class="gallery">
  <img src="<?php echo base_url('assets/images/taza3.png'); ?>" alt="Cinque Terre" width="600" height="400">
  <div class="desc"><pre><font size="1">$24.99
Some quick example text to build
on the card title and make up the
bulk of the card's content</pre></font><center><button id="button">Add to cart</button></center></div>
</div>
<?php echo form_close(); ?>
</form>

</div>

<div id="id1" style="width:100%; height: 18%; position:absolute;color: white;font-family: arial;font-size: 10;padding-top: 40px; margin-top: 550px"><br>
	<p style="font-family: sans-serif;font-size: 23;color: black;margin-left: 200px"><b>View shopping cart</b></p>
	<p style="color: brown;margin-left: 200px">you can see the products that you added to your cart</p><br>
  <?php echo form_open('Buyfromus_controller/final/uri'); ?>
<form method="POST" action="">
	<div style="float: right;margin-top:-75px; margin-right: 250px"><button id="button">Submit</button>
    <?php echo form_close(); ?>
</form>
	</div>
</div>
