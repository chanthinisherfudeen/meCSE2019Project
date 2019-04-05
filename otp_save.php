<?php
include "db.php";
include "clean.php";

//`tbl_otp`   `otp_uid``otp_genotp``otp_usrotp`  link

$link = $_POST["link"];
$genotp = $_POST["gen_otp"];
$userotp = $_POST["user_otp"];
$userid = $_POST["user_id"];


$sqlqry="SELECT * FROM `tbl_otp` WHERE `otp_uid`='$userid'";
			//`otp_uid``otp_genotp``otp_usrotp`
			$ses_result=mysql_query($sqlqry);				
			$res=mysql_fetch_array($ses_result);
				
				$gen_otp=$res["otp_genotp"];
				$usr_otp=$res["otp_usrotp"];
				
if($userotp!='' && $gen_otp!='' )
{
	//UPDATE `tbl_otp` SET `otp_usrotp`='' WHERE staff_id=$hdnid

	$Insertquery = "UPDATE `tbl_otp` SET `otp_usrotp`='$userotp' WHERE `otp_uid`='$userid' AND `otp_genotp`='$genotp'";
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
header("location:".$link );

?>