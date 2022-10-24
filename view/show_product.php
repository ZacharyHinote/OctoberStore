<?php
    include '../model/data_functions.php';
    $item = null;
    if($_GET) {
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
    <?php if(!$item): ?>
        <h1>Item does not exist!</h1>
    <?php else: ?>
        <?php foreach($item as $attribute): ?>
            <p><?= $attribute ?></p>
        <?php endforeach; ?>
        <p><?= $item['item_id'] ?></p>
        <form action="/OctoberStore/index.php" method="POST">
            <input type="hidden" name="action" id="action" value="add">
            <input type="hidden" name="id" id="id" value="<?= $item['item_id'] ?>">
            <button>Add to cart</button>
        </form>
    <?php endif;?>

    <a href="/OctoberStore">Home</a>

</body>
</html>