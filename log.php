<?php

if(isset($_GET["status"]))
{
$status=$_GET["status"];
if($status==1)
{
header("location:inner.php");

}
else
{
	header("location:reset_password.php");
}
}
?>