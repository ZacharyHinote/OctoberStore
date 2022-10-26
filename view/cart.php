<h2>Cart</h2>
<table>
<th>Item Name: </th>
<th>Item Quantity: </th>
<th>Item Price: </th>
<th>Item Subtotal: </th>
<?php
	$total = 0;
	
	foreach($_SESSION['cart12'] as $cart_item) {
		//For each item in the cart, this displays them in the table. 
		echo "<tr><td>". $cart_item['item_name'] . "</td>" . '&nbsp';
		echo "<td>" . $cart_item['qty'] . "</td>";
		echo "<td> $" . $cart_item['price'] . "</td>";
		echo "<td> $" . $cart_item['price'] * $cart_item['qty'] . "</td>";
		echo '</tr><br>';
		$total += $cart_item['price'] * $cart_item['qty'];
	}
	echo "</table><br>";
	echo "Total: $" . $total;//Displays the total. 
	
	

	
?>


<form action = "../OctoberStore/index.php">
	<input type="submit" name="home" class="button" value="Return to Shopping"/>
</form>
