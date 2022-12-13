<?php
require __DIR__ . './Models/Product.php';

$cuccia = new Product('Cuccia', './img/cuccia.jpg', 26, 'Cuccia', 'Cani');

$palla = new Product('Palla', './img/palla.jpg', 4, 'Gioco', 'Cani');

$crocchette = new Product('Crocchette Gatti', './img/crocchette-gatti.jpg', 12, 'Cibo', 'Gatti');

include __DIR__ . './partials/header.php';
include __DIR__ . './partials/main.php';
include __DIR__ . './partials/footer.php';
