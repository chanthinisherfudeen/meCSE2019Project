<?php 
session_start();

//Connect to database from here
include "db.php";
include "clean.php";
//get the posted values
$txt_id=clean($_POST["txt_name"]);
$txt_pswd=clean($_POST["txt_pswd"]);
//$txt_color=clean($_POST["txt_color"]);
//`tbl_userlogin`  `login_category``login_name``login_password` `login_status`
$sql="SELECT * FROM tbl_userlogin WHERE login_name='$txt_id' and login_password='$txt_pswd' and login_status='Active'";
print $sql;
$ses_result=mysql_query($sql);


//if username exists
if(mysql_num_rows($ses_result)>0)
{
	$row=mysql_fetch_array($ses_result);
	
	$_SESSION['cellu_name']=$row["login_id"];
	$_SESSION['cellu_welcomename']=$row["login_name"];
	//$_SESSION['cellu_email']=$row["cust_email"];		
	$_SESSION['cellu_id']=$row["login_id"];	
	$_SESSION['cellu_type']=$row["login_category"]; 	
//	$_SESSION['cellu_balance']=$row["cust_balance"];	
//	$_SESSION['sess_answer']=$row["cust_answer"];	
//	$_SESSION['sess_securityquestion']=$row["cust_securityquestion"];	
//	
//	$mobile=$row["cust_contact"];
//	$number=rand(1000, 9999);
	
//	$_SESSION['sess_otp']=$number;
//	$_SESSION['sess_usermobile']=$mobile;
//	
//	$class= base64_decode("aHR0cDovL3Ntcy5oZXhjb25pbmZvdGVjaC5jb20vYXBpL3dlYjJzbXMucGhwP3VzZXJuYW1lPW1hbWdyb3VwJnBhc3N3b3JkPUNvbGxlZ2VAMTQmdG89RComc2VuZGVyPU1BTVRSWSZtZXNzYWdlPUUq");
//			
//	$message="Welcome to this bank. Your OTP Code: $number";
//	
//	$templatedesc= urlencode($message);
//	//print $mobileno."<br/>";
//	$X =   $class;
//	
//	
//	$X = str_replace("D*",$mobile,$X);
//	$X = str_replace("E*",$templatedesc,$X);
//				
//	$url =$X;				
//	//print $url."<br/>";
//	$ch = curl_init($url);
//	$timeout = 20;
//	curl_setopt($ch,CURLOPT_URL,$url);
//	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
//	$data = curl_exec($ch);
//	curl_close($ch);
				
	header("location:userinner.php");
			
			

	
	//header("location:inner.php");
	
}
else
{
$status = "1"; 
header("location:userlogin.php?status=".$status);
	
}

?>