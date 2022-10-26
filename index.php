<!--
Authors: Zachary Hinote, Connor Hardin, Landen Brewer
Project: Halloween Shop Group Assignment
Date: 10/19/2022
 -->

<?php
include 'model/data_functions.php';
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();



// Create a cart array if needed
if (empty($_SESSION['cart12'])) { $_SESSION['cart12'] = array(); }

// Create a table of products
$items = getItemArray();


if(count($_POST)) { //Upon one of the action buttons being pressed to add to the shopping cart, this adds the item to the cart. 
	switch($_POST['action']) {
		case 'add':
			add_item($_POST['id'], $_POST['qty']); 
			break; 
	}
}



?>

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
    <img src="assets/img/Jackolantern.png" alt="Jack o Lantern Logo">

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
