<!-- import class User -->
<?php require_once __DIR__ . '/classes/User.php'?>
<?php require_once __DIR__ . '/classes/Product.php'?>
<?php require_once __DIR__ . '/classes/subProducts/Wear.php'?>


<!-- first instance of User -->
<?php 
$user1 = new  User('Piccolo', 'Zino', 65);
?>

<!-- first instance of Product -->
<?php 
$product1 = new Product('T-Shirt', 15);
$product1->setScount($user1->getScount())
?>

<?php 
$product_wear1 = new Wear('Shirt', 25, 'top-wear');
$product_wear1->setScount($user1->getScount())
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Shop online</title>
</head>
<body>
    <div class="container">
        <h1 class="m-1">SHOP ONLINE</h1>
        <div class="user m-1">
            <h2>Hi <?php echo $user1->getFullName()?></h2>
            <?php if($user1->getAge() >= 65) {?>
            <div class="scount">
                Congrats! As a Senior Client you have <?php echo $user1->getScount() . '%'?> of scount
            </div>
            <?php } ?>
        </div>
    
        <div class="products m-1">
            <h2 class="m-1">On sale</h2>
            <ul>
                <li class="m-1">
                    <h3 class="prduct-name"><?php echo $product1->getName()?></h3>
                    <h5>Product code: #<?php echo $product1->getCode()?></h5>
                    <span>Price: 
                        <del><?php if($product1->getFullPrice() != $product1->getPrice()) {
                            echo $product1->getFullPrice() . '$';
                            }?>
                        </del>
                        <?php echo $product1->getPrice() . '$'?>
                    </span>
                </li>
                <li>
                    <h3 class="product-name"><?php echo $product_wear1->getName()?></h3>
                    <h5>Product code: #<?php echo $product_wear1->getCode()?></h5>
                    <h5>Type: <?php echo $product_wear1->getType() ?></h5>
                    <span>Price: 
                        <del><?php if($product_wear1->getFullPrice() != $product_wear1->getPrice()) {
                            echo $product_wear1->getFullPrice() . '$';
                            }?>
                        </del>
                        <?php echo $product_wear1->getPrice() . '$'?>
                    </span>
                    <h5>Available sizes: <?php echo $product_wear1->getSizes() . '.'?> </h5>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>