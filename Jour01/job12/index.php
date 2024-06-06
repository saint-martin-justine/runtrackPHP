<?php
function occurrences($str, $char) {
    // Utilisation de la fonction mb_substr_count pour compter les occurrences
    $count = mb_substr_count($str, $char);
    return $count;
}

// Exemples d'utilisation de la fonction occurrences()
$texte1 = "Hello, World!";
$char1 = 'l';
$resultat1 = occurrences($texte1, $char1); // Compte le nombre de 'l' dans "Hello, World!"

$texte2 = "La Plateforme!";
$char2 = 'e';
$resultat2 = occurrences($texte2, $char2); // Compte le nombre de 'e' dans "La Plateforme!"

// Affichage des résultats
echo "Nombre d'occurrences de '$char1' dans '$texte1' : $resultat1<br>"; // Affiche 3
echo "Nombre d'occurrences de '$char2' dans '$texte2' : $resultat2<br>"; // Affiche 2
?>
