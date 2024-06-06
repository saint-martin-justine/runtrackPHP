<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } elseif ($jour === false) {
        echo "Bonsoir";
    } else {
        // Gestion d'une valeur inattendue pour $jour
        echo "Erreur : Le paramètre jour doit être un booléen (true/false)";
    }
}

// Exemples d'appel de la fonction bonjour()
bonjour(true); // Affiche "Bonjour"
echo "<br>";
bonjour(false); // Affiche "Bonsoir"
echo "<br>";
bonjour(42); // Affiche un message d'erreur
?>
