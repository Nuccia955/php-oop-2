<!-- import class User -->
<?php 
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/subUser/Premium_user.php';
?>

<!-- instances of users -->
<?php 
$user1 = new  User('Ciccio', 'Pasticcio', 65);
$user2 = new User('Carolina', 'La Mucca', 40);
$premium_user1 = new Premium_user('Maurizio', 'Natalizio', 30)
?>

<?php require_once __DIR__ . '/instances/productsWear.php' ?>

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
        <!-- USER STANDARD -->
        <div class="user m-1">
            <h2>Hi <?php echo $user1->getFullName()?></h2>
            <?php if($user1->getAge() >= 65) {?>
            <div class="scount">
                Congrats! As a Senior Client you have <?php echo $user1->getScount() . '%'?> of scount
            </div>
            <?php } ?>
        </div>
    
        <div class="products m-2">
            <h2 class="m-1">On sale</h2>
            <ul>
                <?php for($i = 0; $i < count($wear_products); $i++) { ?>
                    <li class="m-1">
                    <h3 class="prduct-name"><?php echo $wear_products[$i]->getName()?></h3>
                    <h5>Product code: #<?php echo $wear_products[$i]->getCode()?></h5>
                    <h5>Type: <?php echo $wear_products[$i]->getType() ?></h5>
                    <span>Price: 
                        <del><?php if($wear_products[$i]->getFullPrice() != $wear_products[$i]->getPrice()) {
                            echo $wear_products[$i]->getFullPrice() . '$';
                            }?>
                        </del>
                        <?php echo $wear_products[$i]->getPrice() . '$'?>
                    </span>
                    <h5>Available sizes: <?php echo $wear_products[$i]->getSizes() . '.'?> </h5>
                    <h5>Available colors: <?php echo $wear_products[$i]->getColors() . '.'?></h5>
                </li>
                <?php } ?>
            </ul>
        </div>


        <!-- USER PREMIUM -->

        <div class="user m-1">
            <h2>Hi <?php echo $premium_user1->getFullName()?></h2>
            <div class="scount">
                Congrats! As a Premium Client you have <?php echo $premium_user1->getScount() . '%'?> of scount
            </div>
        </div>
    
        <div class="products m-2">
            <h2 class="m-1">On sale</h2>
            <ul>
                <?php for($i = 0; $i < count($wear_products_premium); $i++) { ?>
                    <li class="m-1">
                    <h3 class="prduct-name"><?php echo $wear_products_premium[$i]->getName()?></h3>
                    <h5>Product code: #<?php echo $wear_products_premium[$i]->getCode()?></h5>
                    <h5>Type: <?php echo $wear_products_premium[$i]->getType() ?></h5>
                    <span>Price: 
                        <del><?php if($wear_products_premium[$i]->getFullPrice() != $wear_products_premium[$i]->getPrice()) {
                            echo $wear_products_premium[$i]->getFullPrice() . '$';
                            }?>
                        </del>
                        <?php echo $wear_products_premium[$i]->getPrice() . '$'?>
                    </span>
                    <h5>Available sizes: <?php echo $wear_products_premium[$i]->getSizes() . '.'?> </h5>
                    <h5>Available colors: <?php echo $wear_products_premium[$i]->getColors() . '.'?></h5>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>