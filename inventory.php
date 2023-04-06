<?php
$inventory = [
    ['name' => 'Sweater', 'price' => 59.99, 'quantity' => 70],
    ['name' => 'Tshirt', 'price' => 19.99, 'quantity' => 92],
    ['name' => 'Sweatpants', 'price' => 39.99, 'quantity' => 78],
    ['name' => 'Flannel Jacket', 'price' => 34.99, 'quantity' => 67],
    ['name' => 'Jeans', 'price' => 54.99, 'quantity' => 85]
];

$name = 'Sam';
$greeting = 'Welcome';

if($name !== '') {
    $greeting = 'Hello ' . $name . '!';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fancy Threads Boutique Inventory</title>
        <link rel="stylesheet" href="inventory.css">
    </head>
    <body>
        <h1>Fancy Threads Boutique</h1>
        <h2> <?= $greeting; ?> </h2>
        <nav>
            <?php if($name !== ''){ ?>
                <a href="cart.php">Cart</a>
            <?php } ?>
            <a href="index.php">Home</a>
        </nav>
        <h3>Inventory</h3> <!-- loop to display inventory-->
        <table>
            <tr id="titles">
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php foreach($inventory as $item) { ?>
                <tr id="contents">
                    <td><?= $item['name']; ?></td>
                    <td>$<?= $item['price']; ?></td>
                    <td>Quantity: <?= $item['quantity']; ?>
                </tr>  
                <?php } ?>     
        </table>
        <img id="shirt" src="tshirt.jpeg" alt="shirt"/>
        <img id="sweats" src="sweats.jpeg" alt="pants"/>
    </body>
    <footer>&copy; <?= date('Y'); ?> Fancy Threads Boutique LLC</footer>
</html>