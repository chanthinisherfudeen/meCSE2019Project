<?php
include "db.php";
include "clean.php";
include "currentdate.php";

$name = $_POST["prject_name"];
$lang = $_POST["prject_lang"];
$ide = $_POST["prject_ide"];
$time = $_POST["prject_time"];
$uid = $_POST["hdn_uid"];

$month=$todaymonth;

$target_path = "uploads/";
$dtTime = date('dmYHis');

$path = $_FILES['fileupload']['name'];

$filepath =$target_path.$dtTime.$path;	
if(move_uploaded_file($_FILES["fileupload"]['tmp_name'], $filepath)) 
{
	$fileName=$filepath;
}
else
{
	$fileName='';
}


$sqlqry="SELECT c.`cat_name` FROM `tbl_userlogin` AS l LEFT JOIN `tbl_category` AS c ON l.`login_category`=c.`cat_id` WHERE `login_id`='$uid'";
			//`login_category``login_uname``login_dob``login_mailid``login_phone``login_address`
			$ses_result=mysql_query($sqlqry);				
			$res=mysql_fetch_array($ses_result);
				
				$login_category=$res["cat_name"];
				
if($name!='')
{
	//,`crtprj_file`,`crtprj_month` `
	
	$Insertquery = "INSERT INTO `tbl_crtproject`(`crtprj_uid`,`crtprj_cat`,`crtprj_name`,`crtprj_lang`,`crtprj_ide`,`crtprj_time`,`crtprj_file`,`crtprj_month`)VALUES('$uid','$login_category','$name','$lang','$ide','$time','$fileName','$month')";
	if(mysql_query($Insertquery))
	{
		$status = 1; 
	}
	else
	{
		$status = 2; 
	}
}
else
{
	$status = 3; 
}
header("location:crtprj_add.php?status=".$status);

?>