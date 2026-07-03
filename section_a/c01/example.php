<?php 

$username = 'Sergey'; //Объявление переменной, содержащей имя пользователя
$greeting = 'Hi, '. $username . ','; //Приветствие ‘Hello, ‘ + имя

$offer = [//Массив, содержащий специальное предложение
  'item' => 'Chocolate', //Название товара со скидкой
  'qty' => 3,//Количество
  'price' => 6, //Первоначальная цена за упаковку
  'discount' => 4, //Цена со скидкой за упаковку
];

$usual_price = $offer['qty'] * $offer ['price']; //Цена без скидки
$offer_price = $offer['qty'] * $offer['discount']; //Цена со скидкой
$saving = $usual_price - $offer_price; //Сэкономленные средства
?>



<!DOCTYPE html>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Multi-buy Offer</h2>

    <p><?=  $greeting ?></p>
    <p class='sticker'>Save <?= $saving ?></p>
    <p>Buy: <?= $offer['qty'] ?>packs of <?= $offer['item'] ?>
    for $<?= $offer_price ?><br>(usual price $<?= $usual_price?>) </p>
  </body>
</html>