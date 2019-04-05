<?php
include "db.php";

$id = trim($_GET["id"]);
//`tbl_book`  `book_id``book_category``book_name``book_description``book_file`

		
$Insertquery = "delete from tbl_book where `book_id`=$id";

				
if(mysql_query($Insertquery))
{	
	$status = 5; 
}
else
{
	$status = 6;
	
}


header("location:booklist.php?status=$status");

?>