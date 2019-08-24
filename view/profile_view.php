<body>
<div id="wrapper2">
	<div id="bigwhite1">
		<div>
		<center style="font-size: 20;color: black">Welcome to your profile</center>
		<img src="<?php echo base_url('assets/images/user.jpg'); ?>" height="45%" width="10%" style="float:left; margin-left:350px;margin-top:50px;"></img>
		<button id="button2" style="padding:0.5px;height: 8%;width: 12%;margin-top:290px; margin-left: -145px">CHANGE IMAGE</button>

		</div>
<div id="div2" style="margin-left: 80px; margin-top: -360px;float: left;">
  <form>
    <?php 
    if($fetch_dat->num_rows()>0)
    {
      foreach($fetch_dat->result() as $row){ ?>

    <input style="width:16%;height: 2%;margin-left:450px;" type="text" id="fname" name="fname" value="<?php echo $row->fname; ?>" placeholder="Enter your name"> 
    <input style="width:16%;height: 2%;margin-left: 670px; margin-top: -21px" type="text" id="lname" name="lname" value="<?php echo $row->lname; ?>" placeholder="Enter last Name">

    <input style="width:35%;height: 2%;margin-left:450px;" type="text" id="fname" name="pwork" value="<?php echo $row->workplace; ?>" placeholder="Enter place work">

  	<input style="width:35%;height: 2%;margin-left:450px;" type="text" id="fname" name="sname"  value="<?php echo $row->school; ?>" placeholder="Enter school">

  	<input style="width:35%;height: 2%;margin-left:450px;" type="text" id="fname" name="mailid"  value="<?php echo $row->mail; ?>" placeholder="Enter email">

  	<input style="width:35%;height: 2%; margin-left:450px; " type="text" id="fname" name="pass"  value="<?php echo $row->password; ?>" placeholder="Enter password">
  	
    <button id="button2" style="padding:0.5px;height: 8%;width: 12%;margin-top:45px; margin-left: 720px">SAVE CHANGES</button>

<?php

}
}
?>

  </form>
</div>
<br>
<br>