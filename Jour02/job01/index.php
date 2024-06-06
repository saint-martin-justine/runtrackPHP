<?php
// Vérifiez si des arguments GET sont présents
if ($_GET) {
    // Comptez le nombre d'arguments GET
    $count = count($_GET);

    // Affichez le nombre d'arguments GET
    echo "Nombre d'arguments GET reçus : " . $count;
} else {
    // Message si aucun argument GET n'est présent
    echo "Aucun argument GET reçu.";
}
?>