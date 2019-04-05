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
 
 
 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Current Project List</a>
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
        <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="6%" align="center" scope="col">S.No</th>
          <th width="13%" align="center" scope="col">project Name</th>
           <th width="6%" align="center" scope="col">Language</th>
          <th width="24%" align="left" scope="col">IDE</th>
          <th width="13%" align="center" scope="col">Time</th>
          <th width="13%" align="center" scope="col">Option</th>
        </tr>
        <?php
			include "db.php";
			
			$sqlDept="SELECT * FROM `tbl_crtproject`  ORDER BY `crtprj_id`";
			$rstDept=mysql_query($sqlDept);
			$rowcount= mysql_num_rows($rstDept);
			if($rowcount==0)
			{
				?>
        <tr>
          <td colspan="5" align="center" style="font-family:'Trebuchet MS';">No records found</td>
        </tr>
        <?php
			}
			else
			{  //`crtprj_id``crtprj_uid``crtprj_name``crtprj_lang``crtprj_ide``crtprj_time`
				for($i=1;$i<=$rowcount;$i++)
				{	

				$res=mysql_fetch_array($rstDept);
				$crtprj_id=$res["crtprj_id"];
				$crtprj_uid=$res["crtprj_uid"];
				$crtprj_name=$res["crtprj_name"];
				$crtprj_lang=$res["crtprj_lang"];
				$crtprj_ide=$res["crtprj_ide"];
				$crtprj_time=$res["crtprj_time"];
				
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td align="center"><?php print $i; ?></td>
           <td><?php print $crtprj_name; ?></td>
           <td><?php print $crtprj_lang; ?></td>
           <td><?php print $crtprj_ide; ?></td> 
           <td><?php print $crtprj_time; ?></td>
        
          <td align="center"><a href="categoryedit.php?id=<?php print $cat_id; ?>" title="Edit"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;<a href="deletecategory.php?id=<?php print $cat_id; ?>" title="Delete"><img src="images/delete.png" /></a></td>
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