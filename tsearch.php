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
			?>
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