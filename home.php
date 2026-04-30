<?php session_start(); ?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>

<form action="cart.php" method="post">

<h3>Pizza</h3>
<input type="checkbox" name="food[]" value="Margherita"> Margherita<br>
<input type="checkbox" name="food[]" value="Pepperoni"> Pepperoni<br>

<h3>Burgers</h3>
<input type="checkbox" name="food[]" value="Veg Burger"> Veg Burger<br>
<input type="checkbox" name="food[]" value="Chicken Burger"> Chicken Burger<br>

<h3>Drinks</h3>
<input type="checkbox" name="food[]" value="Coke"> Coke<br>
<input type="checkbox" name="food[]" value="Juice"> Juice<br>

<br>
Quantity: <input type="number" name="quantity" required><br><br>

<input type="submit" name="add" value="Add to Cart">
</form>

<br>
<a href="cart.php">Go to Cart</a>