<?php 
$timezone = new DateTimeZone("Asia/Kolkata");
$date = new DateTime();
$date->setTimezone($timezone );
$crdt=$date->format( 'd-m-Y/h:i:s A' );
$datetime=$date->format( 'd-M-Y/h:i:s A' );
$today=$date->format( 'd/m/Y' );

$explode_date=explode("/", $crdt);

$currentdatetime=$crdt;
$currentdate=$explode_date[0];
$currenttime=$explode_date[1];

$explode_today=explode("/", $today);
$todaydate=$explode_today[0];
$todaymonth=$explode_today[1];

?>