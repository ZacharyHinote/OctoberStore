<?php

    $items = getItemArray(); 
    if(isset($_GET['order'])) {
        $items = getItemArrayOrdered($_GET['order']);
    }
?>

<h2> Products </h2>

<div class="sort-box">
    <h3>Sort</h3>
    <form action="" method="GET">
        <div id="sort-setting">
        <select name="order" id="order">
            <option value="">Select an option</option>
            <option value="alphabetical">Item Name</option>
            <option value="price-ascending">Price Ascending</option>
            <option value="price-desc">Price Descending</option>
        </select>
       
        <button id="sort-button">Sort</button>
        </div>
    </form>
</div>

<div class="item-container">
    <?php foreach($items as $item): ?>
        <div class='whole-item'>
            <a href="view/show_product.php?id=<?= $item[0] ?>">
                <div class="item">
                    <p><?= $item[1] ?></p>
                    <div class='img' style="background-image: url('assets/img/<?= $item[4] ?>'"></div>
                </div>
            </a>
            
            <!--This code displays every item in the items array for the form.-->
        </div>
    <?php endforeach; ?>	
</div>

<br>
    <form action="" method="GET">
		<input type="submit" id="form-submit" name="submit" class="button" value="Checkout"/>
	</form>
    <br>