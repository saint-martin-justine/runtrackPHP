<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            // Vérifier si le diviseur est 0 pour éviter une division par zéro
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            // Vérifier si le diviseur est 0 pour éviter une division par zéro
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        default:
            return "Opération non valide";
    }
}

// Exemples d'utilisation de la fonction calcule()
$resultat1 = calcule(10, '+', 5); // Addition : 10 + 5
$resultat2 = calcule(20, '*', 3); // Multiplication : 20 * 3
$resultat3 = calcule(25, '/', 5); // Division : 25 / 5
$resultat4 = calcule(15, '%', 4); // Modulo : 15 % 4
$resultat5 = calcule(8, '-', 3);  // Soustraction : 8 - 3

// Affichage des résultats
echo "Résultat 1 : $resultat1<br>"; // Affiche 15
echo "Résultat 2 : $resultat2<br>"; // Affiche 60
echo "Résultat 3 : $resultat3<br>"; // Affiche 5
echo "Résultat 4 : $resultat4<br>"; // Affiche 3
echo "Résultat 5 : $resultat5<br>"; // Affiche 5
?>