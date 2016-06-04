<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

<h1><?php echo $heads; ?></h1>
<h2>Add</h2>
<p> <?php echo $var1 ." + ". $var2 ." = ".$addTotal; ?></p>
<h2>Sub</h2>
<p> <?php echo $var1 ." - ". $var2 ." = ".$subTotal; ?></p>
<a href ="home">Home</a>
<a href ="about">About</a>
</body>
</html>