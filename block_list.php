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
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Blocked User List</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
         
     &nbsp;
        </a>
        
   
        <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="7%" align="center" scope="col">S.No</th>
          <th width="21%" align="left" scope="col"> Name</th>
          <th width="19%" align="left" scope="col">Phone No</th>
          <th width="19%" align="left" scope="col">User Name</th>
          <th width="14%" align="center" scope="col">Password</th>
          <th width="14%" align="center" scope="col">Status</th>
        </tr>
        <?php
		//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`
			include "db.php";
			
			$sqlDept="SELECT * FROM `tbl_userlogin` WHERE `login_status`='Inactive'";
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
//`login_uname``login_phone``login_name``login_password``login_status`
				$res=mysql_fetch_array($rstDept);
				$id=$res["login_id"];
				$uname=$res["login_uname"];
				$phone=$res["login_phone"];
				$name=$res["login_name"];
				$password=$res["login_password"];
				$status=$res["login_status"];
				
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td align="center"><?php print $i; ?></td>
          <td align="left"><?php print $uname; ?></td>
          <td><?php print $phone; ?></td>
           <td><?php print $name; ?></td>
           <td><?php print $password; ?></td>
          <td align="center"><a href="unblock_save.php?hId=<?php print $id; ?>"><?php print $status; ?></a></td>
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