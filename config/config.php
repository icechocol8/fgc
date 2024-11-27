<?php
date_default_timezone_set("Asia/Manila");
	session_start();
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','assettracker');

	try {
		$conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
		// echo "Connected Successfully";
	} catch(PDOException $e) {
		echo "Connection Failed" . $e->getMessage();
	}
?>