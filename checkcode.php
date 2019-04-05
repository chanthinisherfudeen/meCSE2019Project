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
<script type="application/javascript">

function fetchcustomer(bid)
{
	
	
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		if (xmlhttp.readyState==1 || xmlhttp.readyState==2 || xmlhttp.readyState==3)
		{
		document.getElementById("dd_customer").innerHTML="<option value=''>Loading customer</option>";
		document.getElementById("txtacc").value='';
		}
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		
			var resText=xmlhttp.responseText;
			if(resText !='')
			{	
			 	
				document.getElementById("dd_customer").innerHTML=resText;		 
				
			
			}
			
		}
	  }
	xmlhttp.open("GET","fetchcustomer.php?bid="+bid,true);
	xmlhttp.send();
}
function fetchacno(bid)
{
	
	
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		if (xmlhttp.readyState==1 || xmlhttp.readyState==2 || xmlhttp.readyState==3)
		{
				document.getElementById("txtacc").value="";
		
		}
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		
			var resText=xmlhttp.responseText;
			if(resText !='')
			{	
			 	var splitted=resText.split('***');
				document.getElementById("txtacc").value=splitted[0];
				document.getElementById("hdnbalance").value=splitted[1];		 
				
			
			}
			
		}
	  }
	xmlhttp.open("GET","fetchacno.php?bid="+bid,true);
	xmlhttp.send();
}

function fetchbranch(bid)
{
	
	
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		if (xmlhttp.readyState==1 || xmlhttp.readyState==2 || xmlhttp.readyState==3)
		{
		document.getElementById("dd_branch").innerHTML="<option value=''>Loading Barnch</option>";
		document.getElementById("dd_customer").innerHTML="<option value=''>select customer</option>";
		document.getElementById("txtacc").value='';
		}
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		
			var resText=xmlhttp.responseText;
			if(resText !='')
			{	
			 	
				document.getElementById("dd_branch").innerHTML=resText;		 
				
			
			}
			
		}
	  }
	xmlhttp.open("GET","fetchbranch.php?bid="+bid,true);
	xmlhttp.send();
}



</script>
<script type="application/javascript">

  function isnumeric(evt)
      {
         var CharacterCode = (evt.which) ? evt.which : event.keyCode
	
         if (CharacterCode > 31 && (CharacterCode < 48 || CharacterCode > 57))
		 {
			
			
			// document.getElementById("err_message").innerHTML="Please type only numbers...!";
            return false;
		 }
		 else
		 {
			 
			  //document.getElementById("err_message").innerHTML="";
		 }
         return true;
}
</script> 
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <link rel="stylesheet" href="styles.css">
    <!-- ####################################################################################################### --> 
    
    <!-- ####################################################################################################### -->
    <?php include "menu.php"; ?>
  </div>
</div>

<!--START CONTENT  --> 
 
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear" align="center">
      
        
        <a style="font-size:20px; font-family:'Times New Roman'; color:#666;">Check Security Code</a>
        <br/> <br/>
        <a id="error" style="font-size:14px; font-family:'Times New Roman'; color:#F00; height:5px;">
          <?php 
	if(isset($_GET["status"]))
	{
		$status=trim($_GET["status"]);
		if($status==1)
		{
			print "Invalid code/security question answer...!";
		}
		if($status==2)
		{
			print "Insert failed...!";
		}
		if($status==3)
		{
			print "Sorry,Insufficient Amount...! Available balanace in your account is :".$_SESSION['cellu_balance'];
		}
		
	}
	
	 ?>
     &nbsp;
        </a>
       
        <form id="frm" name="frm" action="transferamount.php" method="post" enctype="multipart/form-data">

          <table width="59%" height="151" align="center" cellpadding="10" cellspacing="10" class="tbll">
           
            
            
             <tr>
              <td width="70%" >Enter The Code</td>
              <td width="71%" ><input type="text"  name="txtcode" autofocus="autofocus" id="txtcode" class="inputs" value=""/></td>
            </tr>
            
            <tr>
            <td width="50%"> (or)</td></tr>
            <tr>
              <td width="29%" > Login with Security Question</td>
              <td width="71%" ><?php print $_SESSION['sess_securityquestion']; ?><br/><input type="text"  name="txt_answer"  id="txt_answer" class="inputs" value=""/></td>
            </tr>
            <tr>
              <td></td>
              <td ><input type="submit" name="dd" id="dd" value="Submit" class="myButton" onclick="return validate();"/>
              <input type="hidden" name="hdnbalance" id="hdnbalance" value="" />
              </td>
            </tr>
          </table>
        </form>
        <!-- END TABS --> 
        
     
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<?php include "footer.php"; ?>