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

<script type="application/javascript">



function validate()
{
	if(document.getElementById("txt_code").value=='')
	{
		document.getElementById("lbl_txt_code").innerHTML='Enter the Bank Id....';
		document.getElementById("txt_code").focus();
		return false;		
	}
	else
	{
		document.getElementById("lbl_txt_code").innerHTML='';
	}
	if(document.getElementById("txt_name").value=='')
	{
		document.getElementById("lbl_txt_name").innerHTML='Enter the Bank name....';
		document.getElementById("txt_name").focus();
		return false;		
	}
	else
	{
		document.getElementById("lbl_txt_name").innerHTML='';
	
			return true;
		
	}
}

</script> 
<script type="application/javascript">

	function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode==32) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode > 189 && charCode < 191))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 

</script> 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Edit Category</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
          <?php 
	if(isset($_GET["status"]))
	{
		$status=$_GET["status"];
		if($status==1)
		{
			print "Inserted successfully....!";
		}
		if($status==2)
		{
			print "Insert failed...!";
		}
	if($status==3)
		{
			print "Fill all the fields...!";
		}
		
	}
	
	 ?>
     &nbsp;
        </a>
         <?php
			include "db.php";
			
			$sqlDept="Select * from tbl_category where cat_id=".$_GET["id"];
			$rstDept=mysql_query($sqlDept);
			$rowcount= mysql_num_rows($rstDept);
			$res=mysql_fetch_array($rstDept);
				$cat_id=$res["cat_id"];
				$cat_name=$res["cat_name"];
				?>
        <form id="frm" name="frm" action="categoryupdate.php" method="post" enctype="multipart/form-data">

          <table width="60%" height="277" align="center" cellpadding="10" cellspacing="10" class="tbll">
            <tr>
              <td width="40%" >Category Name</td>
              <td width="60%" ><input type="text" name="txt_name" id="txt_name" class="inputs" value="<?php print $cat_name; ?>"/></td>
            </tr>
           
            <tr>
              <td></td>
              <td ><input type="submit" name="dd" id="dd" value="Submit" class="myButton" onclick="return validate();"/></td>
            </tr>
          </table>
          <input type="hidden" name="hdnid" value="<?php print $_GET["id"]; ?>" />
        </form>
        <!-- END TABS --> 
        
     
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>