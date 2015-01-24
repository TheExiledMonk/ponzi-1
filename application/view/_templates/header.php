<?php
//initiate system
$system = $this->model->system();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $system->sitename; ?></title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo URL; ?>themes/less/bootstrap.less">
	<script src="<?php echo URL; ?>themes/js/less/less.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>themes/style/fullcalendar.css" />	
    <link rel="stylesheet" href="<?php echo URL; ?>themes/style/delta.main.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>themes/style/delta.grey.css"/>
	<script src="<?php echo URL; ?>themes/js/excanvas.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/jquery.ui.custom.js"></script>
    <script src="<?php echo URL; ?>themes/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/jquery.flot.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/jquery.peity.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/fullcalendar.min.js"></script>
    <script src="<?php echo URL; ?>themes/js/delta.js"></script>
    <script src="<?php echo URL; ?>themes/js/delta.dashboard.js"></script>
	
</head>
<body>
	<br>