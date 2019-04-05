<?php

include "header.php";
?>
<link rel="stylesheet" href="logincss/style.css">
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  
  
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
       <div align="center" style="font-size:14px; ">&nbsp;
       
       <script type="text/javascript">
	   function gotopage()
	   {
		   if(document.getElementById("chk").checked==true)
		   {
			   window.location="inner.php";
		   }
	   }
	   </script>
              <?php
                 
if(isset($_POST['chk_admin']))
{
$chk=$_POST['chk_admin'];

	
}
/*if($chk==1)
{
	header("location:inner.php");
}
if($chk==0)
{
header("location:login.php");	
}*/
?>
            </div>
            
  <div>
  <table width="100%" align="center"  cellpadding="10" cellspacing="0" >
       
        <?php
		include "db.php";
			
			$sqlRoom="SELECT * FROM tbl_images ORDER BY RAND() LIMIT 1";
			
			$rstRoom=mysql_query($sqlRoom);
			$rowcount= mysql_num_rows($rstRoom);
			//print $sqlRoom;
			if($rowcount>0)
			{
				
				$res=mysql_fetch_array($rstRoom);
				
				$img_path=$res["img_path"];
				$imgid=$res["img_id"];
				
  			}
  		?>
        </tr>
        
      </table>
    <form action="checkadmin.php" method="post">
   <table width="42%" align="center" height="36%" border="0" style="border-collapse:collapse; border:1px solid #333;" background="<?php print $img_path; ?>">
            <?php
			$h=rand(1,7);
			$v=rand(1,7);
			
			for($i=1; $i<=8; $i++)
			{
				?>
                  <tr>
                  <?php
			for($j=1; $j<=8; $j++)
			{
				
				?>
                    <td width="8%" align="center"
					>
                    <?php
					if($i==$h && $j==$v)
					{
					?>
                    <input type="checkbox" name="chk" id="chk" value="" />
                    <?php
					}
					else
					{
						print "&nbsp;";	
					}
					?>
                    </td>
                    
                    <?php
			}
			?>
                  </tr>
                  <?php
			}
			?>
  
</table>

<div align="center"><input type="button" name="dd" id="dd" value="Submit" class="myButton" onclick="gotopage();"/></div>
</form>
  </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>