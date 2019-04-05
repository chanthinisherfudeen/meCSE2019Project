<?php
include "db.php";
include "clean.php";

$dd_branch = clean($_POST["dd_cat"]);
$txt_name = clean($_POST["txt_name"]);
$txt_des = clean($_POST["txt_des"]);

$target_path = "book/";
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
//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`
if($dd_branch>0 && $txt_name!='' && $txt_des!='' && $fileName!='')
{
	$Insertquery = "insert into tbl_book(`book_category`,`book_name`,`book_description`,`book_file`)values('$dd_branch','$txt_name','$txt_des','$fileName')";
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
header("location:bookadd.php?status=".$status);

?>