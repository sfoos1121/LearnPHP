<?php
$name = 'Sandie';
$favorites = ['coffee', 'chocolate', 'video games', 'shoes',];
$items = 3;
$cost = 50;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>My Favs</h1>
    <h2>Welcome <?= $name; ?></h2>
    <p>Your favorite thing is <?= $favorites[2] ?>.</p>
    <p>Items: <?= $items ?></p>
    <p>Cost: <?= $cost ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Tax: <?= $tax ?></p>
</body>
</html>