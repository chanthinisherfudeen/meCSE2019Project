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
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Intruder List</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
         
     &nbsp;
        </a>
        
   
        <table width="100%" align="left" class="listtbl" cellpadding="10" border="1" cellspacing="0" >
        <tr >
          <th width="11%" align="center" scope="col">S.No</th>
          <th width="25%" align="left" scope="col"> Name</th>
          <th width="20%" align="left" scope="col">User Type</th>
          <th width="21%" align="left" scope="col">Search Type</th>
          <th width="23%" align="center" scope="col">Time</th>
        </tr>
        <?php
		//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`
			include "db.php";
			
			$sqlDept="SELECT * FROM `tbl_intruder`";
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
//`in_id``in_user``in_name``in_usrcat``in_schcat``in_time`
				$res=mysql_fetch_array($rstDept);
				$id=$res["in_id"];
				$usr_id=$res["in_user"];
				$usr_name=$res["in_name"];
				$usr_cat=$res["in_usrcat"];
				$sch_cat=$res["in_schcat"];
				$time=$res["in_time"];
				
				?>
        <tr <?php if(($i%2)==0){ ?> class="alternate" <?php } ?>>
          <td align="center"><?php print $i; ?></td>
          <td align="left"><?php print $usr_name; ?></td>
          <td><?php print $usr_cat; ?></td>
           <td><?php print $sch_cat; ?></td>
           <td><?php print $time; ?></td>
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