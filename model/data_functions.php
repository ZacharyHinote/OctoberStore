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

    function getItemArray() {
        $myQuery = "Select * from games";
        global $db;
        $qry = $db->query($myQuery);       
        $games = $qry->fetchAll();
		print_r($items);
        return $items;
    }


?>