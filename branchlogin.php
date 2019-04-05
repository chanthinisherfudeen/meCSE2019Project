<?php

include "header.php";
?>
<link rel="stylesheet" href="logincss/style.css">
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  
  
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div align="center" style=" font-size:15px; font-family:'Times New Roman', Times, serif; letter-spacing:1px;"><?php
			if(isset($_GET["status"]))
			{
				$status=$_GET["status"];
			
				if($status=="1")
				{
					echo "Invalid password...!";
				}
				if($status=="2")
				{
					echo "Invalid username...!";
				}
				if($status=="3")
				{
					echo "Logout successfully...!";
				}  
				
			}
			?></div>
  <div>&nbsp;</div>
      <div class="login">
    <h1 style="font-family:'Times New Roman', Times, serif; padding-top:12px;" align="center">Branch Login Panel</h1>
    <form method="post" action="#">
      <p>
        <input type="text" name="txt_id" value="" placeholder="Username">
      </p>
      <p>
        <input type="password" name="txt_pswd" value="" placeholder="Password">
      </p>
      <p align="center">
        <input type="submit" name="commit" value="Login" class="myButton" style="cursor:pointer">
      </p>
       <p align="right">
       <a href="index.php">Home</a>
      </p>
    </form>
  </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>