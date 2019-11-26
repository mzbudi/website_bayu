<!DOCTYPE html>
<html>
<?php
	include_once('header.php');
?>
<body>
	
<div class="bg">
  <div class="d-flex" id="wrapper">
<?php
	
	include_once('nav.php');
	include_once('nav_custom.php');
	include_once('content/'.$content_active.'.php');
?>
	</div>
</div>
<?php
	include_once('footer.php');
?>
</body>
</html>