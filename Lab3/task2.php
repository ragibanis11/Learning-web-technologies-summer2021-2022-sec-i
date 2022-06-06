<?php


$vat = 15;

$price = 10000;

$vat = ($price / 100) * $vat;

$totalPrice = $price + $vat;

echo number_format($totalPrice, 2);

?>