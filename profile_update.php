<?php
include "db.php";
include "currentdate.php";
//txt_id
$id = $_POST["txt_id"];
$txt_name = $_POST["txt_uname"];
$txt_dob = $_POST["txt_dob"];
$txt_mailid = $_POST["txt_mailid"];
$txt_phno = $_POST["txt_phno"];
$txt_address = $_POST["txt_address"];

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

$update="UPDATE `tbl_userlogin` SET `login_uname`='$txt_name',`login_dob`='$txt_dob',`login_mailid`='$txt_mailid',`login_address`='$txt_address',`login_photo`='$fileName' where `login_id`=$id";
//print $update;
if(mysql_query($update))
{
	$status = 1; 
}
else
{
	$status = 2; 
}

header("location:profile.php");
	
?>