<?php 
require_once __DIR__ . '/product.php';

require_once __DIR__ . '/user.php';

require_once __DIR__ . '/drugs.php';

$test = new Prodotto(20 , 'shampoo al miele', 'si');

$testM = new Medicinale(20 , 'oki', 'si', 'uso comune' , 'no');

$testU = new User('mario');
$testU->status = 'premium';
$testU->aggiungiProdotto($test);
$testU->premiumDiscount($test);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>il carrello <?php echo $carrello ?></h1>
    </div>
</body>
</html>
