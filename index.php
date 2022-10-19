<!--
Authors: Zachary Hinote, Connor Hardin, Landen Brewer
Project: Halloween Shop Group Assignment
Date: 10/19/2022
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
	<title>October Store</title>
	<link rel="stylesheet" href="assets/css/styles.css">
 </head>
 
 <body>
	<header>
		<h1>October Store</h1>
	</header>
	<?php
			if (isset($_GET['submit'])) {//Checks if the form as been submitted. 
				$signup = true;
			}
			else {
				$signup = false;
			}
			switch($signup) {			
				case(true)://If the form has been submitted, this executes. 
					include 'view/cart.php'; //Displays the ordered item and quantity with the customer's name. 
					break;
				default: 
					include 'view/orderform.php';//Brings up the orderForm page before anything is posted. 
			}
		?>
</body>