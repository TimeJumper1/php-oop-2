<?php 
require_once __DIR__ . '/product.php';

require_once __DIR__ . '/user.php';

require_once __DIR__ . '/drugs.php';

require_once __DIR__ . '/illegalItem.php';

require_once __DIR__ . '/dealer.php';

$test = new Prodotto(20 , 'shampoo al miele', 'si');

$testM = new Medicinale(20 , 'oki', 'si', 'uso comune' , 'no');

$testU = new User('mario');
$testU->status = 'premium';
$testU->aggiungiProdotto($test);
$testU->aggiungiProdotto($testM);
$testU->premiumDiscount($test);
$carrello_user = $testU->getCarrello();



try {
    $testPI = new Dealer(1000, 'non esponibile', 'molto alto'); 
        
} catch(Exception $e) {

  echo 'il sito è in manutenzione';
    
}

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
        <h1>il carrello contiene</h1>
        <?php foreach($carrello_user as $product) { ?>
            <div>
                <h2><?php echo $product->descrizione; ?> - <?php echo $product->prezzo ?></h2>
                <div>disponibilità <?php echo $product->disponibilità; ?></div>
                
                <?php if(isset($product->bugiardino)) { ?>
                <div>bugiardino: <?php echo $product->bugiardino; ?> </div>
                <?php } ?>
                <?php if(isset($product->prescrizione)) { ?>
                <div>ha bisogno di prescrizione: <?php echo $product->prescrizione; ?> </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    
</body>
</html>
