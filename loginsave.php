<?php
include "db.php";
include "currentdate.php";

$category = $_POST["dd_cat"];

$txt_name = $_POST["txt_uname"];
$txt_dob = $_POST["txt_dob"];
$txt_mailid = $_POST["txt_mailid"];
$txt_phno = $_POST["txt_phno"];
$txt_address = $_POST["txt_address"];

$txt_username = $_POST["txt_name"];
$txt_password = $_POST["txt_pass"];

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

//`tbl_userlogin`  `login_category``login_name``login_password` `login_photo`

$Insertquery = "INSERT INTO tbl_userlogin(`login_category`,`login_uname`,`login_dob`,`login_mailid`,`login_phone`,`login_address`,`login_name`,`login_password`,`login_status`,`login_photo`)VALUES('$category','$txt_name','$txt_dob','$txt_mailid','$txt_phno','$txt_address','$txt_username','$txt_password','Active','$fileName')";
print $Insertquery;
if(mysql_query($Insertquery))
{
	$status = 1; 
}
else
{
	$status = 2; 
}

header("location:createlogin.php?status=$status");
?>