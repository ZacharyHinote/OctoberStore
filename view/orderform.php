<?php
    $items = getItemArray();
?>

<h2> Products </h2>

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
	<form action="" method="GET">
		
		<input type="submit" name="submit" class="button" value="Checkout"/>
	</form>
</div>
