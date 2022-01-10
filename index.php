<!-- import class User -->
<?php require_once __DIR__ . '/classes/User.php'?>

<!-- first instance of User -->
<?php 
$user1 = new  User('Ciccio', 'Pasticcio', 65);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
</head>
<body>
    <h1>SHOP ONLINE</h1>
    <h2>Hi <?php echo $user1->getFullName()?></h2>
    <div class="scount">Congrats! As a Senior Client you have <?php echo $user1->getScount()?> of scount</div>
</body>
</html>