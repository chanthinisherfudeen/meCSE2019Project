<?php
include "db.php";
include "clean.php";

$depName = clean($_POST["txt_name"]);
//`tbl_category` `cat_name` `cat_id`
if($depName!='')
{
	$id=$_POST["hdnid"];
	$Insertquery = "update tbl_category set cat_name='$depName' where cat_id=$id";
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
header("location:categorylist.php?status=".$status);

?>