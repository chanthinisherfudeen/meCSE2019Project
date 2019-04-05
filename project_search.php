<?php
session_start();
include "db.php";
error_reporting(0); 
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
 
 
 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Project Search</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
          <?php 
	if(isset($_GET["status"]))
	{
		$status=trim($_GET["status"]);
		if($status==1)
		{
			print "Updated successfully....!";
		}
		if($status==2)
		{
			print "Update failed...!";
		}
	
		if($status==5)
		{
			print "Deleted successfully...!";
		}
		if($status==6)
		{
			print "Sorry... Cannot delete a parent row: a foreign key contraint fails...!";
		}
	}
	$b='';
	$usr_id=''; 
	$login_category='';
	
	if(isset($_POST["dd_branch"]))
	{
		$b=trim($_POST["dd_branch"]);
	}
	if(isset($_POST["us_id"]))
	{
		$usr_id=trim($_POST["us_id"]);
	}
	
	$usr_cat=$_SESSION['cat'];
	
	if($usr_id!='')
	{
	$qry_user="SELECT `login_category` FROM `tbl_userlogin` WHERE `login_id`='4'";
			//print $qry_user;
			$rest_user=mysql_query($qry_user);
			$row_count= mysql_num_rows($rest_user);
				$rest=mysql_fetch_array($rest_user);
				$log_cat=$rest["login_category"];
				//print $log_cat;
				//print $usr_cat;
		$sqlt_qry="SELECT * FROM `tbl_otp` WHERE `otp_uid`='$id'";
			//print $sqlqry;
			//`otp_uid``otp_genotp``otp_usrotp`
	 $sest_result=mysql_query($sqlt_qry);				
	 $reset=mysql_fetch_array($sest_result);
				
				$gent_otp=$reset["otp_genotp"];
				$user_otp=$reset["otp_usrotp"];
				
			if($usr_cat!=$log_cat && $gent_otp!=$user_otp )
			{ 
			$upqry="UPDATE `tbl_userlogin` SET `login_status`='Inactive' WHERE `login_id`=$id";
		//	print $upqry;
			if(mysql_query($upqry))
			{
				include "session.php";

                 header("location:index.php?status=3");

				}
			
			
			}
	}
	 ?>
     
     &nbsp;
        </a>
        <fieldset style="border-color:#CCC;color:#333; font-size:14px;"><legend>Search </legend>
    <br/>
    <form id="frmblock" name="frmblock" action="project_search.php" method="post">
      <table style="color:#333; font-size:14px;">
        <tr>
          <td width="117">Project name</td>
          <td width="376">
          <input type="hidden" name="us_id" id="us_id" value="<?php print  $id; ?>" />
          <input type="text" name="dd_branch" id="dd_branch" class="ddlist" onchange="submitbranch();" /></td>
        </tr>
      </table>
      </form>
      </fieldset>
      <?php 
	  if($b!='')
			{
	   ?>
        <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="7%" align="center" scope="col">S.No</th>
          <th width="21%" align="left" scope="col">Project Name</th>
          <th width="21%" align="left" scope="col">Language</th>
          <th width="21%" align="left" scope="col">Duration</th>
          <th width="19%" align="left" scope="col">IDE</th>
          <th width="19%" align="left" scope="col">Download</th>
        </tr>
        <?php
		//`tbl_projectsearch`  `ps_user``ps_keyword``
				$sqluser="SELECT l.*,c.`cat_name` FROM `tbl_userlogin` AS l LEFT JOIN `tbl_category` AS c ON l.`login_category`=c.`cat_id` WHERE `login_id`='$id'";
			//print $sqluser;
			$rstuser=mysql_query($sqluser);
			$rowcnt= mysql_num_rows($rstuser);
			if($rowcnt!=0)
			{
				$ress=mysql_fetch_array($rstuser);
				$login_id=$ress["login_id"];
				$login_category=$ress["login_category"];
				$login_name=$ress["login_name"];
				$cat_name=$ress["cat_name"];
			}
				$Insertquery = "INSERT INTO `tbl_projectsearch` (`ps_user`,`ps_keyword`,`ps_category`)VALUES('$id','$b','$login_category')";
	if(mysql_query($Insertquery))
	{
		//Finished  Pending   Correction
			$sqlDept="SELECT * FROM `tbl_crtproject` WHERE `crtprj_cat`='$usr_cat' AND `crtprj_name` LIKE '%$b%'";
			//print $sqlDept;    
			$rstDept=mysql_query($sqlDept);
			$rowcount= mysql_num_rows($rstDept);
			if($rowcount==0)
			{
				?>
        <tr>
          <td colspan="6" align="center" style="font-family:'Times New Roman', Times, serif">No records found</td>
        </tr>
        <?php
			}
			else
			{
				for($i=1;$i<=$rowcount;$i++)
				{	
                //`crtprj_id``crtprj_uid``crtprj_cat``crtprj_name``crtprj_lang``crtprj_ide``crtprj_time`
				//`corrprj_file` `crtprj_file`  `fnprj_file`  `pendprj_file`
				$res=mysql_fetch_array($rstDept);
				$pr_id=$res["crtprj_id"];
				$pr_category=$res["crtprj_cat"];
				$pr_name=$res["crtprj_name"];
				$pr_language=$res["crtprj_lang"];
				$pr_duration=$res["crtprj_time"];
				$pr_description=$res["crtprj_ide"];
				$pr_file=$res["crtprj_file"];
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td align="center"><?php print $i; ?></td>
          <td align="left"><?php print $pr_name; ?></td>
          <td align="left"><?php print $pr_language; ?></td>
          <td align="left"><?php print $pr_duration; ?></td>
          <td><?php print $pr_description; ?></td>
           <td><?php if($usr_cat==$log_cat || $gent_otp==$user_otp)
			{ ?><a href="downloadfile.php?file=<?php print $pr_file; ?>" target="_blank">Download</a><?php  } ?></td>
        </tr>
        <?php
  				}
  	}
	}
			}
  ?>
      </table>
        <!-- END TABS --> 
        
       
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>