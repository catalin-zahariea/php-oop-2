<?php
    require_once __DIR__ . '/user.php';
    require_once __DIR__ . '/product.php';
    require_once __DIR__ . '/lotion.php';
    require_once __DIR__ . '/lipstick.php';
    require_once __DIR__ . '/deodorant.php';

    // RANDOM USER INSTANCE
    // 
    $user = new User('Catalin', 'Zahariea', 'catalin@gmail.com', '1234');
    $user->gender = 'Male';
    $user->country = 'Italy';
    $user->distance = 55;
    // RANDOM LOTION INSTANCE
    // 
    $lotion = new Lotion('Lotion', 12, 100);
    $lotion->brand = 'Garnier';
    $lotion->mixture = 'Hydro';
    $lotion->bodyPart = 'Face';
    // RANDOM LIPSTICK INSTANCE
    // 
    $lipstick = new Lipstick('Lipstick', 20, 50);
    $lipstick->brand = 'Yves Saint Laurent';
    $lipstick->color = 'Red';
    // RANDOM DEODORANT INSTANCE
    // 
    $deodorant = new Deodorant('Deodorant', 7, 150);
    $deodorant->brand = 'Denim';
    $deodorant->scent = 'White Musk';
    $deodorant->duration = '24 hours';
    // ADDING PRODUCTS TO USER
    // 
    $user->addProduct($lotion);
    $user->addProduct($lipstick);
    $user->addProduct($deodorant);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics</title>

    <!-- LINK CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- MAIN -->
    <main>
        <div class="container">
            <h1>Your order</h1>
            <ul>
                <?php foreach($user->getProducts() as $product) { ?>
                    <li>
                        <div>Product: <?php echo $product->name; ?></div>
                        <div>Brand: <?php echo $product->brand; ?></div>
                        <div><?php if($product instanceof Lotion) { echo "Mixture: " . $product->mixture . "<br>" . "Body Part: " . $product->bodyPart; } ?></div>
                        <div><?php if($product instanceof Lipstick) { echo "Color: " . $product->color; } ?></div>
                        <div><?php if($product instanceof Deodorant) { echo "Scent: " . $product->scent . "<br>" . "Duration: " . $product->duration; } ?></div>
                        <div>Price: <?php echo $product->price; ?> €</div>
                        <div>Shipping Price: <?php echo $product->setShippingPrice($user->distance); ?> €</div>
                        <div>Shipping Time: <?php echo $product->setShippingTime($user->distance); ?> days</div>
                        <div>Product Weight: <?php echo $product->productWeight; ?> gr</div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
    <!-- END MAIN -->
</body>
</html>