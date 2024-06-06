<?php
// Inclut les fonctions
include 'functions.php';

// Crée la liste de produits
$products = createProductList();

// Applique les réductions
applyDiscount($products);

// Inclut le fichier pour afficher les produits
include 'products.php';
?>
