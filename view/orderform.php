<?php
    echo "<br>OrderForm<br>";
    $items = getItemArray();
    //print_r($items);
    
//     foreach ($items as $item) {
//         echo ($item[1] . "<br>");
//    }
?>

<div class="item-container">
    <?php foreach($items as $item): ?>
        <div class='whole-item'>
            <a href="view/show_product.php?id=<?= $item[0] ?>">
                <div class="item">
                    <p><?= $item[1] ?></p>
                    <div class='img' style="background-image: url('assets/img/<?= $item[4] ?>'"></div>
                </div>
            </a>
            
            <form action="" method="POST">
                <input type="hidden" name="action" id="action" value="add">
                <input type="hidden" name="id" id="id" value="<?= $item[0] ?>">
                <button>Quick Add</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>