<?php
// Crée et retourne une liste de produits
function createProductList() {
    return [
        ['name' => 'Produit 1', 'price' => 120, 'quantity' => 10],
        ['name' => 'Produit 2', 'price' => 80, 'quantity' => 5],
        ['name' => 'Produit 3', 'price' => 150, 'quantity' => 8],
        ['name' => 'Produit 4', 'price' => 60, 'quantity' => 12],
        ['name' => 'Produit 5', 'price' => 200, 'quantity' => 3]
    ];
}

// Applique une réduction de 10% sur les produits ayant un prix supérieur à 100 €
function applyDiscount(&$products) {
    foreach ($products as &$product) {
        if ($product['price'] > 100) {
            $product['price'] *= 0.9;
        }
    }
}

// Affiche la liste des produits
function displayProducts($products) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>{$product['name']}</td>";
        echo "<td>{$product['price']} €</td>";
        echo "<td>{$product['quantity']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
