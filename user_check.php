<?php 
session_start();
include "db.php";

$txt_card=trim($_POST["txt_card"]);

$txt_pswd=trim($_POST["txt_pswd"]); 

$subsql="SELECT * FROM `tbl_logindetails` where login_cardno='$txt_card' and login_password='$txt_pswd'";
print $subsql;
$question_sub=mysql_query($subsql);
$rcountsub=mysql_num_rows($question_sub);	
if($rcountsub>0)
{	


	$res=mysql_fetch_array($question_sub);

	$tried=$res["login_try"];
	if($tried==3)
	{
		header("location:userlogin.php?Q=7",true);
	}
	else
	{
			$_SESSION['cellu_welcomename']=$txt_card;
		$_SESSION['cellu_name']=$res["login_cardno"];		
		$_SESSION['cellu_id']=$res["login_userid"]; 				
		$_SESSION['cellu_type']=$res["login_role"]; 		
		
	//print $_SESSION['login_userid'];
	header("location:checkimage.php",true);
	}
			
		
}
else
{
	header("location:userlogin.php?Q=1",true);
}


?>