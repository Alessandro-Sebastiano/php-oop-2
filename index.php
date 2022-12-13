<?php
require __DIR__ . './Models/Product.php';

$palla = new Product('Cuccia', 'https://picsum.photos/300/200', 26);

// var_dump($palla);

include __DIR__ . './partials/header.php';
include __DIR__ . './partials/main.php';
include __DIR__ . './partials/footer.php';
