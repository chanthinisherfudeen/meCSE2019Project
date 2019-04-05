<?php
include "db.php";
include "currentdate.php";
$hId=trim($_GET['hId']);
//print $exe1; SELECT * FROM `tbl_userdetails` WHERE  `user_actday` BETWEEN 1 AND 8 OR  `user_actday` BETWEEN 27 AND 31

	$query="UPDATE `tbl_userlogin` SET `login_status`='Active' WHERE `login_id`='$hId'";
	
	//print $query;
	if(mysql_query($query))
	{
		
		$status=1;	
	}
	else
	{
		$status=2;	
	}
header("location:block_list.php");




?>