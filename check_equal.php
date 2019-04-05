<?php


include "db.php";

$id			=$_POST['txt_card'];
$chk			=$_POST['chk'];
if($chk!='')
{

$subsql="SELECT * FROM tbl_customers WHERE cust_atmcardno='$id'";
print $subsql;
$question_sub=mysql_query($subsql);
$rcountsub=mysql_num_rows($question_sub);
if($rcountsub>0)
{	


	$res=mysql_fetch_array($question_sub);

		
	$login_process=unserialize(base64_decode($res["cust_process"])); 
	
}

sort($login_process);
sort($chk);


$diff=array_diff($chk,$login_process);
if(count($diff)==0)
{
	mysql_query("update tbl_customers set cust_try=0 where cust_atmcardno='$id'");
	header("location:reset_password.php?card=".$id	);
}
else
{
	mysql_query("update tbl_customers set cust_try=(cust_try+1) where cust_atmcardno='$id'");
	
	include "sessionend.php";


	header("location:userlogin.php?Q=6");	
}
}
else
{
   header("location:checkimage.php?Q=7");	
}
?>