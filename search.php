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
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Search</a>
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
       
    <br/>
      <table style="color:#333; font-size:14px;">
        <tr>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="book_search.php">Reference Search</a></td>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="psearch2.php">Programmer Search</a></td>
        </tr>
        <tr>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="tsearch2.php">Tester Search</a></td>
          <td width="300" align="center"><img src="images/companies_256.png" height="150" width="100" /><br /><a href="wsearch2.php">Web Developer Search</a></td>
        </tr>
      </table>
      </fieldset>
     
        
        <!-- END TABS --> 
        
       
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>