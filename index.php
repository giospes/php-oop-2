<?php include __DIR__.'/db/db.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($products as $product){ ?>
        <div class="card">
            <h3><?php echo $product->getproduct_name()?></h3>
            <ul>
                <li><?php echo $product->getprice()?></li>
                <li><?php echo $product->gettype_name()?></li>
                <li><?php echo $product->getcategory_name()?></li>
                <li><?php echo $product->getWeight()?></li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>