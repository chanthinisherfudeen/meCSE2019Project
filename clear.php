<?php
include "db.php";


$id = $_GET['id'];
$path =$_GET["imgpath"];

if(mysql_query("delete from tbl_images where img_id=$id"))
{
	if(file_exists($path))
	{
		unlink($path);
	}
	$status=6;
}
else
{
	$status=7;
}


header("location:image_list.php?Q=".$status);
?>