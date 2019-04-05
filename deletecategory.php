<?php
include "db.php";

$id = trim($_GET["id"]);

//`tbl_category` `cat_name` `cat_id`		
$Insertquery = "delete from tbl_category where `cat_id`=$id";

				
if(mysql_query($Insertquery))
{	
	$status = 5; 
}
else
{
	$status = 6;
	
}


header("location:categorylist.php?status=$status");

?>