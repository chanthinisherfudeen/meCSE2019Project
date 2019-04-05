<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational Theory
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IIDS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Featured Slider  -->
<script type="text/javascript" src="layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000 
	});
});
</script>
<!-- / Featured Slider -->
</head>
<body id="top">

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">IIDS</a></h1>
    </div>
    <div class="fl_right">
      <p>&nbsp;</p>
      <p>&nbsp;</p><p>&nbsp;</p>
      <?php
	  $loginname="Guest";
	  if(isset($_SESSION["cellu_welcomename"]))
	  {
		  $loginname=$_SESSION["cellu_welcomename"];
	  }
	  ?>
      <p><a href="#">Welcome <?php print $loginname; ?></a> 
      
      <?php
	 // $loginname="Guest";
	  if(isset($_SESSION["cellu_name"]))
	  {
		  ?>
      | <a href="logout.php">Logout</a>
      
      <?php
	  }
	  ?></p>
    </div>
  </div>
</div>