<?php error_reporting(0); ?>
<body>
<div id="wrapper">
	<div id="about">
		<center style="font-size: 30; font-family:arial; color: black"><b>List of Conferences</b></center>
	</div>
<div id="bigwhite1">
<?php if ($username === 'myadmin@gmail.com'): ?>
<a style="float:right;" href="<?php echo site_url('Addconference_controller/index/uri'); ?>">add</a>
<?php endif; ?>
<?php
//$sname = $this->session->userdata('mail');
//		echo "$sname";
//?>

<form method="get" action="">
<table id="tablecon" cellspacing="25" cellpadding="10" width="90%">
<tr id="font1">
	<th>Name</th>
	<th><center>Description</center></th>
	<th>Date</th>
	<th>Location</th>
	<th colspan="3">Add to mylist</th>
</tr>

		
		<?php foreach($events as $eve) {?>
     		
     		<tr>
     			<td><?php echo $eve->name;?></td>
     			<td><?=$eve->description;?></td>
     			<td><?=$eve->datee;?></td>
     			<td><?=$eve->location;?></td>
     	<?php if ($username == 'myadmin@gmail.com'){ ?>
     			<td><a href="<?php echo site_url('Addconference_controller/index/uri'); ?>">add</a></td>
     			<td><a href="<?php echo site_url('Editconference_controller/index/uri'); ?>">edit</a></td>
     			 <td><a href="<?php echo base_url('index.php/Addconference_controller/del/'.$eve->datee); ?>">delete</a></td>
     	<?php }
     	 else{ ?>
     		<td><a href="<?php echo base_url('index.php/Addconference_controller/uform/'.$eve->name); ?>">add</a></td>
     		</tr> 

        <?php }
    }?> 



</table></form>
</div>
</div>