<!-- import class User -->
<?php require_once __DIR__ . '/classes/User.php'?>
<?php require_once __DIR__ . '/classes/Product.php'?>

<!-- first instance of User -->
<?php 
$user1 = new  User('Ciccio', 'Pasticcio', 65);
?>

<!-- first instance of Product -->
<?php 
$product1 = new Product('T-Shirt', 15)
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
            <div class="scount">
                Congrats! As a Senior Client you have <?php echo $user1->getScount()?> of scount
            </div>
        </div>
    
        <div class="products m-1">
            <h2 class="m-1">On sale</h2>
            <ul>
                <li>
                    <h3 class="prduct-name"><?php echo $product1->getName()?></h3>
                    <h5>Product code: #<?php echo $product1->getCode()?></h5>
                    <span>Price <?php echo $product1->getPrice()?>$</span>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>