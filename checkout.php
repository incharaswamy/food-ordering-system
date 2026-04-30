<?php
session_start();
include 'db.php';

$username = $_SESSION['username'];

echo "<h2>Order Placed!</h2>";

if(!empty($_SESSION['cart'])) {

    foreach($_SESSION['cart'] as $item) {

        $food = $item['food'];
        $quantity = $item['quantity'];

        $sql = "INSERT INTO orders (username, food_item, quantity)
                VALUES ('$username', '$food', '$quantity')";

        $conn->query($sql);
    }

    unset($_SESSION['cart']);
}
?>