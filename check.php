<link rel="stylesheet" type="text/css" href="css/mycss.css" />
<br/><br/><br/><table width="90%" class="tblhome" border="0" align="center" cellpadding="15" cellspacing="15">
        <tr>
          <td colspan="3" align="right"></td>
        </tr>
        
        
        <?php
		session_start();
		include "db.php";
		$file_signature='';
		$error='';
		if(isset($_GET["fid"]))
		{
			$fid=$_GET["fid"];
		}
		if(isset($_POST["fid"]))
		{
			$fid=$_POST["fid"];
		}
		$txtkey='';
		if(isset($_POST["txtkey"]))
		{
			$txtkey=$_POST["txtkey"];
				
			$sqlSec="Select * from tbl_fileupload  where file_id=$fid";
			//print $sqlSec;
			$rstSec=mysql_query($sqlSec);
			$rowcount= mysql_num_rows($rstSec);
			if($rowcount>0)
			{
				
	
					$res=mysql_fetch_array($rstSec);
					$file_id  =$res["file_id"];
					$file_name=$res["file_name"];
					$file_key =$res["file_key"];
					$file_code =$res["file_code"];
					$file_compressed =$res["file_compressed"];
					if(trim($txtkey)==trim($file_key))
					{
						$error='Key Matched...!';
						
					}
					else
					{
						$error="Invalid Key...!";
					}
			}
		}
		
		?>
        <tr>
          <td colspan="3" align="center" >
         <?php print $error; ?>
         
              <table width="461" height="114" class="" cellpadding="5"  align="center" style="font-family:'Times New Roman', Times, serif; background-color:#FF80C0; font-size:16px;">
                
                <tr>
                  <th height="44" colspan="2" align="center" style="text-transform:uppercase">Matching And Comparing LDN Values</th>
                </tr>
               
                 <tr>
                  <td colspan="2" align="center"><a href="ldncodecheck.php"><input name="submit" type="submit" class="myButton" value="Compare LDN"></a></td>
                </tr>
              </table>
              <br/>
              
          </td>
        </tr>
         
      </table>