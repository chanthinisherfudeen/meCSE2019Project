<?php 
session_start();

//Connect to database from here
include "db.php";
include "clean.php";
//get the posted values
$txt_id=clean($_POST["txt_id"]);
$txt_pswd=clean($_POST["txt_pswd"]);



$sql="SELECT * FROM ec_logindetails WHERE login_name='$txt_id'";
print $sql;
$ses_result=mysql_query($sql);



//if username exists
if(mysql_num_rows($ses_result)>0)
{
	$row=mysql_fetch_array($ses_result);
	$login_id=$row["login_id"];
	$login_password=$row["login_password"];
	//compare the password
	if(strcmp($txt_pswd,$login_password)==0)
	{
		
		//now set the session from here if needed
		$_SESSION['cellu_welcomename']=$txt_id;
		$_SESSION['cellu_name']=$txt_id;		
		$_SESSION['cellu_id']=$login_id; 
		$_SESSION['cellu_type']='admin'; 	
		
		header("location:inner.php");
	}
	else
	{
	$status = "1"; 
	header("location:login.php?status=".$status);
		
	}
		
}
else
{
 
	$status = "2"; 
	header("location:login.php?status=".$status);
	
}


?>