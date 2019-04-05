<?php
session_start();

if(isset($_SESSION["cellu_id"]))
{
$uid=$_SESSION["cellu_id"];
}
else
{
	
	header("location:index.php");
}
?>
<?php

include "header.php";
?>
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
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Profile</a>
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
	
	 ?>
     &nbsp;
        </a>
       
        <?php
			include "db.php";
			$sqlqry="SELECT l.*,c.`cat_name` FROM `tbl_userlogin` AS l LEFT JOIN `tbl_category` AS c ON l.`login_category`=c.`cat_id` WHERE l.`login_id`='$uid'";
			//`login_category``login_uname``login_dob``login_mailid``login_phone``login_address` `login_photo`
			$ses_result=mysql_query($sqlqry);				
				$rowcount= mysql_num_rows($ses_result);
				$res=mysql_fetch_array($ses_result);
				
				$login_id=$res["login_id"];
				$login_category=$res["cat_name"];
				$login_uname=$res["login_uname"];
				$login_dob=$res["login_dob"];
				$login_mailid=$res["login_mailid"];
				$login_phone=$res["login_phone"];
				$login_address=$res["login_address"];
				$login_photo=$res["login_photo"];
				
				?>
                 <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="24%" align="center" scope="col">Category </th>
          <td><?php print $login_category; ?></td>
          <td rowspan="6" align="center"><img src="<?php print $login_photo;  ?>" height="200px" width="200px" /></td>
           </tr>
           <tr>
          <th width="24%" align="center" scope="col">Name</th>
           <td><?php print $login_uname; ?></td>
           </tr>
            <tr>
            <th width="24%" align="center" scope="col">DOB</th>
             <td><?php print $login_dob; ?></td> 
             </tr>
           <tr>
          <th width="24%" align="center" scope="col">Mail ID</th>
          <td><?php print $login_mailid; ?></td>
          </tr>
           <tr>
           <th width="24%" align="center" scope="col">Phone</th>
            <td><?php print $login_phone; ?></td>
            </tr>
          <th width="24%" align="center" scope="col">Address</th>
          <td><?php print $login_address; ?></td>
          </tr>
           
         <tr> <td colspan="3" align="center"><a href="profile_edit.php?id=<?php print $login_id; ?>" title="Edit">Edit</a></td>
        </tr>
   
      </table>
        <!-- END TABS --> 
        
     
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>