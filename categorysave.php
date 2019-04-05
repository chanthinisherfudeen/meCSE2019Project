<?php
include "db.php";
include "clean.php";

$depName = clean($_POST["txt_name"]);

if($depName!='')
{
	$Insertquery = "insert into tbl_category(`cat_name`)values('$depName')";
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
header("location:categoryadd.php?status=".$status);

?>