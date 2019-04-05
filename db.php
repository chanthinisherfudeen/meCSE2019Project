<?PHP 
$link=mysql_connect("localhost","root","") or die ("couldnot connect to server");


if (!$link) {
die('Could not connect: ' . mysql_error());
}
$dbname="atm";
mysql_select_db('iids');


?>