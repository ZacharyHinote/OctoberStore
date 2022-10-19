<?php
    $dsn = "mysql:host=localhost;dbname=octoberstore";
    $username = "root";
	$password = "";
    try {
		$db = new PDO($dsn, $username, $password);
        echo("connected");
    } catch (PDOException $e){
        echo("Fail");
    }

?>