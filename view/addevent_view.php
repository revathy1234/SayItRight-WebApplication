<body background="home-banner.jpg" style="overflow: scroll;visibility: visible">
	<?php echo form_open('Addevent_controller/form/uri'); ?>
	<form method="post">
		<pre>
		<input type="text" name="name" placeholder="Enter event name">
		<input type="text" name="desc" placeholder="Enter event description">

		<input type="text" size="10%" name="loc" placeholder="Enter event location">
		<br>		<br>					<br>									<input type="date" name="datee" placeholder="Enter event date" style="margin-top: 100px; margin: 20px ">
									<input id="button2" style="width: 10%; margin-top: 100px; margin-left:10px" type="submit" value="Add">
	</pre>
	<?php echo form_close(); ?>
	</form>
<div id="id1" style="width:100%; height: 20%; position:absolute;color: white;font-family: arial;font-size: 10;padding-top: 79px;z-index: -1"><br>
</div>
</body>
</div>