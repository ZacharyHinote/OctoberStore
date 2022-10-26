<?php
    include '../model/data_functions.php';//Imports the data functions. 
    $item = null;
    if($_GET) {//Retrieves the item id by the item ID entered. 
        $item = getItemById($_GET['id']); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Single Product</title>
</head>
<body>
    <?php if(!$item): ?><!--If the item id fails to be returned, this outputs that the item does not exist. -->
        <h1>Item does not exist!</h1>
    <?php else: ?>
        
		<?php
			//Outputs the Product's information for the customer, consisting of the product's name, price, description, and picture. 
			echo("Product Name: " . $item["item_name"] . "<br><br>Price: $" . $item['price'] 
			. "<br><br>Product Description: " . $item["description"] . "<br><br><img src=\"../assets/img/" . $item['image_name'] . "\" alt = \" Image of " . $item["item_name"] . "\">");
		?>
		
        
        <form action="/OctoberStore/index.php" method="POST" id="quantity">
            <input type="hidden" name="action" id="action" value="add">
            <input type="hidden" name="id" id="id" value="<?= $item['item_id'] ?>">
			<label for="qty"> Quantity </label>
			<input type="number" name="qty" min="1">
            <button id="add-to-cart">Add to cart</button>
        </form>
    <?php endif;?>
 <hr>
    <a href="/OctoberStore" id="return-home-btn">Return Home</a>

</body>
</html>
