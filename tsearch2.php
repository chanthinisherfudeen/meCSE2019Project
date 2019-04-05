<link rel="stylesheet" href="main.css">
<?php
session_start();

if(isset($_SESSION["cellu_id"]))
{
$id=$_SESSION["cellu_id"];
}
else
{
	
	header("location:index.php");
}
?>
<?php

include "header.php";
?>
<script type="text/javascript">
function submitbranch()
{
	document.getElementById("frmblock").submit();
}

</script>
<!-- ####################################################################################################### --> 

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <link rel="stylesheet" href="styles.css">
    <!-- ####################################################################################################### --> 
    
    <!-- ####################################################################################################### -->
    <?php include "menu.php"; ?>
  </div>
</div>
   <?php
		//`tbl_projectsearch`  `ps_user``ps_keyword``
				include "db.php";
				include "currentdate.php";
				$cat='Tester';
				$sqluser="SELECT * FROM `tbl_userlogin` WHERE `login_id`='$id'";
			//print $sqluser;
			$rstuser=mysql_query($sqluser);
			$rowcnt= mysql_num_rows($rstuser);
			if($rowcnt!=0)
			{
				$ress=mysql_fetch_array($rstuser);
				$login_id=$ress["login_id"];
				$login_category=$ress["login_category"];
				$login_name=$ress["login_name"];
				
				if($login_category==1)
				{
					$catagory='Programmer';
					}
				if($login_category==2)
				{
					$catagory='Web Developer';
					}
				if($login_category==3)
				{
					$catagory='Tester';
					}
			}
			
				
			if($login_category!='3')
			{ 
				$mobileno='7200453929';
		//print $mobileno."<br/>";
		//$date=$exploded[1];
		$class= base64_decode("aHR0cDovL3Ntcy5oZXhjb25pbmZvdGVjaC5jb20vYXBpL3dlYjJzbXMucGhwP3VzZXJuYW1lPW1hbWdyb3VwJnBhc3N3b3JkPUNvbGxlZ2VAMTQmdG89RComc2VuZGVyPU1BTVRSWSZtZXNzYWdlPUUq");
			
			$message=rand(1000,9999);;
			
			$templatedesc= urlencode($message);
		//print $mobileno."<br/>";
			$X =   $class;
			
			
			$X = str_replace("D*",$mobileno,$X);
			$X = str_replace("E*",$templatedesc,$X);
						
			$url =$X;				
			//print $url."<br/>";
			$ch = curl_init($url);
			$timeout = 20;
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
			$data = curl_exec($ch);
			curl_close($ch);
			
			$Inst_qry = "INSERT INTO `tbl_intruder` (`in_user`,`in_name`,`in_usrcat`,`in_schcat`,`in_time`)VALUES('$login_id','$login_name','$catagory','$cat','$datetime')";
mysql_query($Inst_qry);

			$sql_qry="SELECT * FROM `tbl_otp` WHERE `otp_uid`='$id'";
			//print $sqlqry;
			//`otp_uid``otp_genotp``otp_usrotp`
			$ses_result=mysql_query($sql_qry);				
			$rese=mysql_fetch_array($ses_result);
				
				$gent_otp=$rese["otp_genotp"];
				if($gent_otp==''){
			
			$Insqry = "INSERT INTO `tbl_otp`(`otp_uid`,`otp_genotp`)VALUES('$id','$message')";
	mysql_query($Insqry);
	}
	else{
		$up_query = "UPDATE `tbl_otp` SET `otp_genotp`='$message' WHERE `otp_uid`='$id'";
	mysql_query($up_query);
		}
			
			?>
 <div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> 
    <div id="lorem"><form action="otp_save.php" method="post">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      OTP: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="hidden" name="link" id="link" value="tsearch.php">
      <input type="hidden" name="user_id" id="user_id" value="<?php print $id; ?>">
       <input type="hidden" name="gen_otp" id="gen_otp" value="<?php print $message; ?>">
                                                            <input type="text" name="user_otp" id="user_otp">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" /></p>
     </form>
    </div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
 <?php  } ?>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Search</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
         
     &nbsp;
        </a>
       

    <br/>
      <table style="color:#333; font-size:14px;">
        <tr>
        <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="tmonth.php?type=current">Current Project</a></td>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="tmonth.php?type=finished">Finished Project</a></td>
        </tr>
        <tr>
        <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="tmonth.php?type=pending">Pending Project</a></td>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="tmonth.php?type=correction">Correction Project</a></td>
        </tr>
      </table>
      </fieldset>
     
        
        <!-- END TABS --> 
        
       
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<script src="jquery.js"></script> 
<script src="main.js"></script>
<?php include "footer.php"; ?>