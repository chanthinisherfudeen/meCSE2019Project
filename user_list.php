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
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">User List</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
         
     &nbsp;
        </a>
        
   
        <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="7%" align="center" scope="col">S.No</th>
          <th width="16%" align="left" scope="col">User Name</th>
          <th width="16%" align="left" scope="col">Category</th>
          <th width="15%" align="left" scope="col">Mail ID</th>
          <th width="15%" align="center" scope="col">Phone No</th>
          <th width="15%" align="center" scope="col">Login Name</th>
          <th width="16%" align="center" scope="col">Password</th>
        </tr>
        <?php
		//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`
			include "db.php";
			
			$sqlDept="SELECT c.`cat_name`,l.* FROM `tbl_userlogin` AS l LEFT JOIN `tbl_category` AS c ON l.`login_category`=c.`cat_id`";
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
//`login_id``login_uname``login_mailid``login_phone``login_name``login_password`
				$res=mysql_fetch_array($rstDept);
				$id=$res["login_id"];
				$cat_name=$res["cat_name"];
				$usr_name=$res["login_uname"];
				$usr_mailid=$res["login_mailid"];
				$usr_phone=$res["login_phone"];
				$login_name=$res["login_name"];
				$password=$res["login_password"];
				
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td><?php print $i; ?></td>
          <td><?php print $usr_name; ?></td>
          <td><?php print $cat_name; ?></td>
          <td><?php print $usr_mailid; ?></td>
           <td><?php print $usr_phone; ?></td>
           <td><?php print $login_name; ?></td>
           <td><?php print $password; ?></td>
        </tr>
        <?php
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