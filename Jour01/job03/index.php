<?php
// Définir les variables de types primitifs
$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$boolVar = true;
$nullVar = null;

// Stocker les informations des variables dans un tableau associatif
$variables = [
    ['type' => 'Integer', 'name' => '$intVar', 'value' => $intVar],
    ['type' => 'Float', 'name' => '$floatVar', 'value' => $floatVar],
    ['type' => 'String', 'name' => '$stringVar', 'value' => $stringVar],
    ['type' => 'Boolean', 'name' => '$boolVar', 'value' => $boolVar ? 'true' : 'false'],
    ['type' => 'NULL', 'name' => '$nullVar', 'value' => 'null']
];

// Générer le tableau HTML
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>Type</th>';
echo '<th>Nom</th>';
echo '<th>Valeur</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach ($variables as $variable) {
    echo '<tr>';
    echo '<td>' . $variable['type'] . '</td>';
    echo '<td>' . $variable['name'] . '</td>';
    echo '<td>' . $variable['value'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>
