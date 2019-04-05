<?php
session_start();

if(isset($_SESSION["cellu_id"]))
{

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

<!--START CONTENT  --> 
 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
                <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Edit Profile</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
<?php
	if(isset($_GET["id"]))
	{
		$uid=$_GET["id"];
		

	}
	
	include "db.php";
			$sqlqry="SELECT l.*,c.`cat_name` FROM `tbl_userlogin` AS l LEFT JOIN `tbl_category` AS c ON l.`login_category`=c.`cat_id` WHERE l.`login_id`='$uid'";
			//`login_category``login_uname``login_dob``login_mailid``login_phone``login_address` `login_photo` `login_id`
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
     &nbsp;
        </a>
        <form id="frm" name="frm" action="profile_update.php" method="post" enctype="multipart/form-data">

          <table width="60%" height="257" align="center" cellpadding="10" cellspacing="10" class="tbll">
            <tr>
            <input type="hidden"  name="txt_id" id="txt_id" class="inputs" value="<?php  print $login_id;  ?>"/>
              <td width="40%" >Category Name</td>
              <td width="60%" ><?php  print $login_category;  ?></td>
            </tr>
            <tr>
              <td width="40%" >Name</td>
              <td width="60%" ><input type="text"  name="txt_uname" id="txt_uname" class="inputs" value="<?php  print $login_uname;  ?>"/></td>
            </tr>
             <tr>
              <td width="40%" >DOB</td>
              <td width="60%" ><input type="text"  name="txt_dob" id="txt_dob" class="inputs" value="<?php  print $login_dob;  ?>"/></td>
            </tr>
             <tr>
              <td width="40%" >Mail ID</td>
              <td width="60%" ><input type="text"  name="txt_mailid" id="txt_mailid" class="inputs" value="<?php  print $login_mailid;  ?>"/></td>
            </tr>
             <tr>
              <td width="40%" >Mobile No</td>
              <td width="60%" ><?php  print $login_phone;  ?></td>
            </tr>
             <tr>
              <td width="40%" >Address</td>
              <td width="60%" ><input type="text"  name="txt_address" id="txt_address" class="inputs" value="<?php  print $login_address;  ?>"/></td>
            </tr>
            <tr>
              <td width="40%" >Upload Photo</td>
              <td width="60%" ><input name="fileupload" type="file"></td>
            </tr>
             <tr>
              <td></td>
              <td ><input type="submit" name="dd" id="dd" value="Submit" class="myButton" /></td>
            </tr>
          </table>
        </form>
        <!-- END TABS --> 
        
     
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>