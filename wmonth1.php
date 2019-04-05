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
       
 <?php 
 
	if( $_SESSION['typ']=='current')
	{
		$link='project_search.php';
		}
	if( $_SESSION['typ']=='finished')
	{
		$link='fproject_search.php';
		}
	if( $_SESSION['typ']=='pending')
	{
		$link='pproject_search.php';
		}
	if( $_SESSION['typ']=='correction')
	{
		$link='crproject_search.php';
		}
	  ?>   

    <br/>
      <table style="color:#333; font-size:14px;">
        <tr>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">January</a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">February </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">March </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">April  </a></td>
        </tr>
        <tr>
           <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">May</a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">June  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">July  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">August   </a></td>
        </tr>
         <tr>
           <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">September </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">October  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">November  </a></td>
          <td width="300" align="center"><a href="<?php print $link; ?>?cat=3">December   </a></td>
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