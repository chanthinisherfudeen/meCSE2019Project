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
				$cat='project';
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
			}
			
			$sqlt_qry="SELECT * FROM `tbl_otp` WHERE `otp_uid`='$id'";
			//print $sqlqry;
			//`otp_uid``otp_genotp``otp_usrotp`
			$sest_result=mysql_query($sqlt_qry);				
			$reset=mysql_fetch_array($sest_result);
				
				$gent_otp=$reset["otp_genotp"];
				$user_otp=$reset["otp_usrotp"];
			
			if($login_category!='3' && $gent_otp!=$user_otp)
			{ 
				
			
			?>
 <div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> 
    <div id="lorem"><form action="otp_save.php" method="post">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      OTP: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="hidden" name="link" id="link" value="tmonth1.php">
      <input type="hidden" name="user_id" id="user_id" value="<?php print $id; ?>">
       <input type="hidden" name="gen_otp" id="gen_otp" value="<?php print $gent_otp; ?>">
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
       
 <?php 
	if( $_GET["type"]=='current')
	{
		$link='project_search.php';
		}
	if( $_GET["type"]=='finished')
	{
		$link='fproject_search.php';
		}
	if( $_GET["type"]=='pending')
	{
		$link='pproject_search.php';
		}
	if( $_GET["type"]=='correction')
	{
		$link='crproject_search.php';
		}
	$_SESSION['cat']='Tester'; 
	$_SESSION['typ']=$_GET["type"];
	  ?>   

    <br/>
      <table style="color:#333; font-size:14px;">
        <tr>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">January</a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">February </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">March </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">April  </a></td>
        </tr>
        <tr>
           <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">May</a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">June  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">July  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">August   </a></td>
        </tr>
         <tr>
           <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">September </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">October  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">November  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">December   </a></td>
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