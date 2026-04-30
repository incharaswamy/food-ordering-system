<?php
session_start();

// Initialize cart if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add items to cart
if (isset($_POST['add'])) {

    // Check if food is selected
    if (isset($_POST['food'])) {

        $foods = $_POST['food'];
        $quantity = $_POST['quantity'];

        foreach ($foods as $food) {

            $_SESSION['cart'][] = [
                'food' => $food,
                'quantity' => $quantity
            ];
        }

    } else {
        echo "<p style='color:red;'>Please select at least one item</p>";
    }
}
?>

<h2>Your Cart</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Food Item</th>
    <th>Quantity</th>
</tr>

<?php
if (!empty($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $item) {
        echo "<tr>
                <td>{$item['food']}</td>
                <td>{$item['quantity']}</td>
              </tr>";
    }

} else {
    echo "<tr><td colspan='2'>Cart is empty</td></tr>";
}
?>

</table>

<br>

<a href="home.php">⬅ Back to Menu</a><br><br>
<a href="checkout.php">Proceed to Checkout ➡</a>