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
 
 
 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Reference Document Search</a>
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
	if(isset($_POST["dd_branch"]))
	{
		$b=trim($_POST["dd_branch"]);
	}
	 ?>
     &nbsp;
        </a>
        <fieldset style="border-color:#CCC;color:#333; font-size:14px;"><legend>Search Reference Document</legend>
    <br/>
    <form id="frmblock" name="frmblock" action="book_search.php" method="post">
      <table style="color:#333; font-size:14px;">
        <tr>
          <td width="117">Document name</td>
          <td width="376"><input type="text" name="dd_branch" id="dd_branch" class="ddlist" onchange="submitbranch();" /></td>
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
          <th width="21%" align="left" scope="col">Document Name</th>
          <th width="19%" align="left" scope="col">Description</th>
          <th width="19%" align="left" scope="col">Download</th>
        </tr>
        <?php
		//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`
				include "db.php";
				//$sqluser="SELECT * FROM `tbl_userlogin` WHERE `login_id`='$id'";
//			//print $sqluser;     
//			$rstuser=mysql_query($sqluser);
//			$rowcnt= mysql_num_rows($rstuser);
//			if($rowcnt!=0)
//			{
//				$ress=mysql_fetch_array($rstuser);
//				$login_id=$ress["login_id"];
//				$login_category=$ress["login_category"];
//				$login_name=$ress["login_name"];
//			}
//				
//				
//				$Insertquery = "INSERT INTO `tbl_booksearch` (`bs_user`,`bs_keyword`,`bs_category`)VALUES('$id','$b','$login_category')";
//	if(mysql_query($Insertquery))
//	{
//	
			$sqlDept="SELECT * FROM tbl_book WHERE `book_name` LIKE '%$b%'";
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

				$res=mysql_fetch_array($rstDept);
				$book_id=$res["book_id"];
				$book_category=$res["book_category"];
				$book_name=$res["book_name"];
				$book_description=$res["book_description"];
				$book_file=$res["book_file"];
				
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td align="center"><?php print $i; ?></td>
          <td align="left"><?php print $book_name; ?></td>
          <td><?php print $book_description; ?></td>
           <td><a href="downloadfile.php?file=<?php print $book_file; ?>" target="_blank">Download</a></td>
        </tr>
        <?php
  				}
  	}
	}
			//}
  ?>
      </table>
        <!-- END TABS --> 
        
       
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>