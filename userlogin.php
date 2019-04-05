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
                 
				 if(isset($_GET["Q"]))
				 {
					if(trim($_GET["Q"])==1)
					{
						print "Invalid username/password...!";	
					}
					if(trim($_GET["Q"])==2)
					{
						print "Please Login with your details...!";	
					}
					if(trim($_GET["Q"])==3)
					{
						print "Logout successfully...!";	
					}
					if(trim($_GET["Q"])==6)
					{
						print "Selected images are invalid...!";	
					}
					if(trim($_GET["Q"])==7)
					{
						print "Sorry your login details are bolcked. Please contact admin...!";	
					}
				 }
				 ?></div>
  <div>&nbsp;</div>
      <div class="login">
    <h1 style="font-family:'Times New Roman', Times, serif; padding-top:12px;" align="center">User Login Panel</h1>
    <form method="post" action="userchecklogin.php">
      <p>
        <input type="text" name="txt_name" value="" placeholder="User Name" autocomplete="off">
      </p>
      <p>
        <input type="password" name="txt_pswd" value="" placeholder="Password"></p>
       <p align="center"> <a href="#">Forget Password?</a></p>
     
      <p align="center">
        <input type="submit" name="commit" value="Login" class="myButton" style="cursor:pointer">
      </p>
      
       <p >
      <div align="left"> <a href="#">Register</a> </div><div align="right" style="margin-top:-15px;" > <a href="index.php">Home</a></div>
      </p>
      
    </form>
  </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>