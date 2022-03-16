<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--<title> View de exemplo </title>-->
	<title> <?php echo $titulo; ?> </title>
</head>
<body>

<div id="container">
	<h1> Primeira view </h1>

	<div id="body">
		<!--<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>-->
		<p> <?php echo $conteudo; ?> </p>
	</div>
</div>

</body>
</html>
