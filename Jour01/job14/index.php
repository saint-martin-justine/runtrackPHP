<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformer une chaîne de caractères</title>
</head>
<body>
    <h2>Transformer une chaîne de caractères</h2>
    <form method="post" action="index.php">
        <label for="str">Chaîne de caractères :</label><br>
        <input type="text" id="str" name="str" value="<?php echo isset($_POST['str']) ? htmlspecialchars($_POST['str']) : ''; ?>" required><br><br>
        
        <label for="action">Action à effectuer :</label><br>
        <select id="action" name="action">
            <option value="gras">Mettre en gras les mots commençant par une majuscule</option>
            <option value="cesar">César : décaler chaque caractère</option>
            <option value="plateforme">Ajouter "_" aux mots finissant par "me"</option>
        </select><br><br>
        
        <input type="submit" value="Transformer">
    </form>

    <?php
    // Traitement du formulaire lorsque soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $action = $_POST['action'];

        switch ($action) {
            case 'gras':
                echo '<h3>Résultat après transformation :</h3>';
                echo transformerEnGras($str);
                break;
            case 'cesar':
                echo '<h3>Résultat après transformation :</h3>';
                echo transformerCesar($str);
                break;
            case 'plateforme':
                echo '<h3>Résultat après transformation :</h3>';
                echo transformerPlateforme($str);
                break;
            default:
                echo '<p>Aucune action sélectionnée.</p>';
                break;
        }
    }

    // Fonction pour mettre en gras les mots commençant par une majuscule
    function transformerEnGras($str) {
        return preg_replace_callback('/\b[A-Z][a-z]*\b/', function($match) {
            return '<strong>' . $match[0] . '</strong>';
        }, $str);
    }

    // Fonction pour appliquer le chiffrement César
    function transformerCesar($str, $decalage = 2) {
        $resultat = '';
        $longueur = strlen($str);
        for ($i = 0; $i < $longueur; $i++) {
            $caractere = $str[$i];
            $codeAscii = ord($caractere);
            // Appliquer le décalage seulement aux lettres de l'alphabet
            if (ctype_alpha($caractere)) {
                $nouveauCodeAscii = $codeAscii + $decalage;
                // Gérer le débordement au-delà de 'z' ou 'Z'
                if (ctype_upper($caractere) && $nouveauCodeAscii > ord('Z')) {
                    $nouveauCodeAscii -= 26;
                } elseif (ctype_lower($caractere) && $nouveauCodeAscii > ord('z')) {
                    $nouveauCodeAscii -= 26;
                }
                $resultat .= chr($nouveauCodeAscii);
            } else {
                $resultat .= $caractere; // Ne pas changer les caractères non alphabétiques
            }
        }
        return $resultat;
    }

    // Fonction pour ajouter "_" aux mots finissant par "me"
    function transformerPlateforme($str) {
        return preg_replace('/\b(\w*me)\b/', '$1_', $str);
    }
    ?>
</body>
</html>
