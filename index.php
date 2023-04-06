<!-- 
    Name: [Sam Krisko]
    South Hills Username: [skrisko08]
-->
<!-- ended up making index page due to skimming directions -->
<?php 
$name = 'Sam';
$greeting = 'Welcome';
//check if name is null or not
if($name !== '') {
    $greeting = 'Hello ' . $name . '!';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fancy Threads Boutique</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Welcome to Fancy Threads Boutique</h1>
        <h2><?php echo $greeting; ?></h2>
        <nav>
            <?php if($name !== ''){ ?>
                <a href="cart.php">Cart</a>
            <?php } ?>
            <a href="inventory.php">Inventory</a>
        </nav>
        <h3>Be sure to check out our inventory!</h3>
        <img id="center" src="phphw2.jpeg" alt="clothes"/>
        <footer>&copy; <?= date('Y'); ?> Fancy Threads Boutique LLC</footer>
    </body>
</html>