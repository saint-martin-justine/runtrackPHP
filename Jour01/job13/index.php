<?php
function leet_speak($str) {
    // Tableau de correspondance des caractères
    $leet = [
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'i' => '1', 'I' => '1',
        'o' => '0', 'O' => '0',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7',
    ];

    // Initialiser une chaîne de résultat vide
    $result = '';

    // Parcourir chaque caractère de la chaîne d'entrée
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Vérifier si le caractère existe dans le tableau leet
        if (array_key_exists($char, $leet)) {
            // Si oui, remplacer par sa version leet speak
            $result .= $leet[$char];
        } else {
            // Sinon, ajouter le caractère original à la chaîne résultat
            $result .= $char;
        }
    }

    // Retourner la chaîne résultat en leet speak
    return $result;
}

// Exemple d'utilisation de la fonction leet_speak()
$texte1 = "Hello, World!";
$texte2 = "Leet Speak is awesome.";

echo "Texte original 1 : $texte1<br>";
echo "Texte en leet speak 1 : " . leet_speak($texte1) . "<br>";

echo "Texte original 2 : $texte2<br>";
echo "Texte en leet speak 2 : " . leet_speak($texte2) . "<br>";
?>
