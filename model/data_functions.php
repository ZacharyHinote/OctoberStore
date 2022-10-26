<?php
    $dsn = "mysql:host=localhost;dbname=octoberstore";
    $username = "root";
	$password = "";
    try {
		$db = new PDO($dsn, $username, $password);
        //echo("connected");
    } catch (PDOException $e){
        echo("Failed to connect to Database");
    }

    function getItemById($id) {
        $myQuery = "Select * from items WHERE item_id=$id";
        global $db;
        $qry = $db->query($myQuery);       
        $items = $qry->fetchAll(PDO::FETCH_ASSOC);
        if($items) return $items[0];
    }

    function getItemArray() {
        $myQuery = "Select * from items ORDER BY item_name";
        global $db;
        $qry = $db->query($myQuery);       
        $items = $qry->fetchAll();
		//print_r($items);
        return $items;
    }

    //TAKEN FROM EXAMPLE AND MODIFIED 
    // Add an item to the cart
    function add_item($id, $quantity) {

        global $db; 
        $qry = $db->query("SELECT * FROM items WHERE item_id=$id");
        $item = $qry->fetchAll()[0];

        if ($quantity < 1) return;

        // If item already exists in cart, update quantity
        if (isset($_SESSION['cart12'][$id])) {
            $quantity += $_SESSION['cart12'][$id]['qty'];
            update_item($id, $quantity);
            return;
        }

        // Add item
        $cost = $item[2];
        $total = $cost * $quantity;
        $item = array(
            'id' => $id,
            'item_name' => $item[1],
            'price' => $cost,
            'qty'  => $quantity,
            'total' => $total
        );
        $_SESSION['cart12'][$id] = $item;
    }

    // Update an item in the cart
    function update_item($key, $quantity) {
        $quantity = (int) $quantity;
        if (isset($_SESSION['cart12'][$key])) {
            if ($quantity <= 0) {
                unset($_SESSION['cart12'][$key]);
            } else {
                $_SESSION['cart12'][$key]['qty'] = $quantity;
                $total = $_SESSION['cart12'][$key]['price'] *
                        $_SESSION['cart12'][$key]['qty'];
                $_SESSION['cart12'][$key]['total'] = $total;
            }
        }
    }

    // Get cart subtotal
    function get_subtotal() {
        $subtotal = 0;
        foreach ($_SESSION['cart12'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }

?>
