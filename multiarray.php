<?php
$shoes = [
    ['name' => 'Vans', 'color' => 'pink', 'price' => 40,],
    ['name' => 'Adidas', 'color' => 'zebra', 'price' => 30,],
    ['name' => 'Pumas', 'color' => 'blue', 'price' => 20,],
    ['name' => 'Jordans', 'color' => 'yellow', 'price' => 80,],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiarray</title>
</head>
<body>
    <h1>Best Shoes</h1>
    <h2>Types</h2>
    <p><?= $shoes[0]['color']; ?>
    <?= $shoes[0]['name']; ?>
    <?= $shoes[0]['price']; ?> </p>
    <p><?= $shoes[1]['color']; ?>
    <?= $shoes[1]['name']; ?>
    <?= $shoes[1]['price']; ?> </p>
    <p><?= $shoes[2]['color']; ?>
    <?= $shoes[2]['name']; ?>
    <?= $shoes[2]['price']; ?> </p>
    <p><?= $shoes[3]['color']; ?>
    <?= $shoes[3]['name']; ?>
    <?= $shoes[3]['price']; ?> </p>
   </body>
</html>