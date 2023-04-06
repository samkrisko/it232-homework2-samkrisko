<?php  
$cart = [
    'name' => 'Sweater', 'price' => 59.99, 'quantity' => 2.00
];
//calculations, didnt use loop
$sub_total += $cart['quantity'] * $cart['price']; 

$discount_rate = 0.02;
$discount = $sub_total * $discount_rate;
$sub_total -= $discount;

$tax_rate = 0.06;
$tax = $sub_total * $tax_rate;
$total = $sub_total + $tax;


$name = 'Sam';
$greeting = 'Welcome';

if($name !== '') {
    $greeting = 'Hello ' . $name . '!';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="cart.css">
    </head>
    <body>
        <h1>Fancy Threads Boutique</h1>
        <h2> <?= $greeting; ?> </h2>
        <nav>
            <?php if($name !== ''){ ?>
                <a href="cart.php">Cart</a>
            <?php } ?>
            <a href="inventory.php">Inventory</a>
            <a href="index.php">Home</a>
        </nav>
        <img src="cart.png" alt="cart"/>
        <h3>Your items: </h3>
        <p id="titles"><?= $cart['name']; ?> | Price: <?= $cart['price']; ?> | (<?= $cart['quantity']?>)</p>
        <p class="money">Subtotal: $<?= number_format($sub_total, 2, '.'); ?> </p>
        <p class="money">Tax Rate: $<?= $tax_rate ?> </p>
        <p class="money">Total: $<?= number_format($total, 2, '.'); ?> </p>
    </body>
    <footer>&copy; <?= date('Y'); ?> Fancy Threads Boutique LLC</footer>    
</html>