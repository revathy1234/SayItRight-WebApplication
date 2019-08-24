<?php error_reporting(0); ?>
<body>
<div id="wrapper">
	<div id="about">
		<center style="font-size: 30; font-family:arial; color: black"><b>List of Events</b></center>
	</div>
<div id="bigwhite1">
	<?php if ($username === 'myadmin@gmail.com'): ?>
	<a href="<?php echo site_url('Addevent_controller/index/uri'); ?>">add</a>
<?php endif; ?>
<form method="get">
	<table id="tablecon" cellspacing="25" cellpadding="10" width="90%">
		<tr id="font1">
			<th>Name</th>
			<th>Description</th>
			<th>Date</th>
			<th>Location</th>
			<th colspan="3">Add to mylist</th>
			
		</tr>

		

		
		<?php foreach($events as $eve){?>
     		
     		<tr>
     			<td><?=$eve->name;?></td>
     			<td><?=$eve->description;?></td>
     			<td><?=$eve->datee;?></td>
     			<td><?=$eve->location;?></td>
     			<?php if ($username === 'myadmin@gmail.com'): ?>
     			<td><a href="<?php echo site_url('Addevent_controller/index/uri'); ?>">add</a></td>
     			 <td><a href="<?php echo site_url('Editevent_controller/index/uri'); ?>">edit</a></td> 
     			 <td><a href="<?php echo base_url('index.php/Addevent_controller/del/'.$eve->datee); ?>">delete</a></td>
     	<?php else: ?>
     		<td><a href="<?php echo base_url('index.php/Addevent_controller/uform'.$eve->name); ?>">add</a></td>
     	<?php endif; ?>											
     		</tr> 

        <?php }?> 
				
			<!--<td><a href="events.php?na=<?php echo $eve->name; ?>">delete</a></td>-->

	</table></form>
</body>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br>