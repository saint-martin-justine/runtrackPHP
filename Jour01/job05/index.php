<?php
// Liste des nombres à exclure
$excluded_numbers = [26, 37, 88, 1111];

// Boucle pour afficher les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Vérifier si le nombre est dans la liste des nombres à exclure
    if (in_array($i, $excluded_numbers)) {
        continue;
    }
    // Afficher le nombre avec un retour à la ligne
    echo "$i<br>";
}
?>
