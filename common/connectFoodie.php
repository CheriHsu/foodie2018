<?php
	// $dsn="mysql:host=104.196.240.76;port=3306;dbname=foodie;charset=utf8";
	// $dsn="mysql:host=localhost;port=3306;dbname=ad105g2;charset=utf8";
	// $user="ad105g2";
	// $password="ad105g2";
	$dsn="mysql:host=localhost;port=3306;dbname=foodie;charset=utf8";	
	$user="root";
	$password="root";
	$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>