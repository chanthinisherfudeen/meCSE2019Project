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
      
        
                <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Add User</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
<?php
	if(isset($_GET["status"]))
	{
		$status=$_GET["status"];
		if($status==1)
		{
			print "User Created successfully....!";
		}
		if($status==2)
		{
			print "User Creation failed...!";
		}

	}
	
	 ?>
     &nbsp;
        </a>
        <form id="frm" name="frm" action="loginsave.php" method="post" enctype="multipart/form-data">

          <table width="60%" height="257" align="center" cellpadding="10" cellspacing="10" class="tbll">
            <tr>
              <td width="40%" >Category Name</td>
              <td width="60%" ><select name="dd_cat" id="dd_cat" class="ddlist">
                <option value="">select category</option>
                 <?php
				include "db.php";
				//`tbl_category` `cat_name` `cat_id`
					
				$sqlDept="Select * from tbl_category order by cat_id";
				$rstDept=mysql_query($sqlDept);
				$rowcount= mysql_num_rows($rstDept);
				for($i=1;$i<=$rowcount;$i++)
				{	

				$res=mysql_fetch_array($rstDept);
				$cat_id=$res["cat_id"];
				$cat_name=$res["cat_name"];
				?>
					  <option value="<?php print $cat_id; ?>" ><?php print $cat_name; ?></option>
				<?php
				}
				?>
                  
                </select></td>
            </tr>
            <tr>
              <td width="40%" >Name</td>
              <td width="60%" ><input type="text"  name="txt_uname" id="txt_uname" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >DOB</td>
              <td width="60%" ><input type="text"  name="txt_dob" id="txt_dob" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >Mail ID</td>
              <td width="60%" ><input type="text"  name="txt_mailid" id="txt_mailid" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >Mobile No</td>
              <td width="60%" ><input type="text"  name="txt_phno" id="txt_phno" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >Address</td>
              <td width="60%" ><input type="text"  name="txt_address" id="txt_address" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >User Name</td>
              <td width="60%" ><input type="text"  name="txt_name" id="txt_name" class="inputs" value=""/></td>
            </tr>
             <tr>
              <td width="40%" >Password</td>
              <td width="60%" ><input type="text"  name="txt_pass" id="txt_pass" class="inputs" value=""/></td>
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