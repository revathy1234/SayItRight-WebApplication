<?php echo error_reporting(0); ?>
<body>
<div id="wrapper">
	<div id="about">
		<center style="font-size: 30; font-family:arial; color: black"><b>List of My Conferences</b></center>
	</div>
<div id="bigwhite1">
<form method="get">
<table id="tablecon" cellspacing="25" cellpadding="10" width="90%">
<tr id="font1">
	<th>Name</th>
	<th><center>Description</center></th>
	<th>Date</th>
	<th>Location</th>
	<th>Delete Conference</th>
</tr>
<?php foreach($events as $eve) {?>
     		
     		<tr>
     			<td><?=$eve->name;?></td>
     			<td><?=$eve->description;?></td>
     			<td><?=$eve->datee;?></td>
     			<td><?=$eve->location;?></td>
     			<td><a href="<?php echo base_url('index.php/Addconference_controller/udel/'.$eve->datee); ?>">delete</a></td>
     		</tr>

     		<?php }?> 

	</table></form>
</div>