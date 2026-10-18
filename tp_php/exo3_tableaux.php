<?php
require __DIR__ . "/config.php";

include __DIR__ . "/includes/entete_inc.php";
include __DIR__ . "/includes/menu_inc.php";

// Exercice 3.1 : Création des tableaux


function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}
echo "<h2>Exercice 3.1 : Création</h2>";

$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

// Tableau indexé
$modules = ["PHP", "HTML", "CSS"];

echo "<h3>Affichage avec foreach</h3>";

foreach ($modules as $module) {
    echo $module . "<br>";
}

echo "<h3>Affichage par indice</h3>";

echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2] . "<br>";

// Exercice 3.2 : Affichage HTML

echo "<h2>Exercice 3.2 : Affichage HTML</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
      </tr>";

foreach ($notes as $nom => $note) {

    if ($note < SEUIL) {
        echo "<tr style='color:red;'>";
    } else {
        echo "<tr>";
    }

    echo "<td>" . $nom . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}

echo "</table>";

// Exercice 3.3 : Statistiques


echo "<h2>Exercice 3.3 : Statistiques</h2>";

// 1. Calcul manuel sans array_sum()

$somme = 0;
$meilleureNote = null;
$plusFaibleNote = null;

foreach ($notes as $note) {

    $somme += $note;

    if ($meilleureNote === null || $note > $meilleureNote) {
        $meilleureNote = $note;
    }

    if ($plusFaibleNote === null || $note < $plusFaibleNote) {
        $plusFaibleNote = $note;
    }
}

$nombreApprenants = count($notes);
$moyenne = $somme / $nombreApprenants;

echo "<h3>Calcul manuel</h3>";
echo "Somme des notes : " . $somme . "<br>";
echo "Moyenne : " . $moyenne . "<br>";
echo "Meilleure note : " . $meilleureNote . "<br>";
echo "Plus faible note : " . $plusFaibleNote . "<br>";

// 2. Vérification avec les fonctions PHP

echo "<h3>Vérification avec les fonctions PHP</h3>";

echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre d'apprenants : " . count($notes) . "<br>";
echo "Note maximale : " . max($notes) . "<br>";
echo "Note minimale : " . min($notes) . "<br>";
echo "Moyenne vérifiée : " .
     (array_sum($notes) / count($notes)) . "<br>";

// 3. Nombre d'apprenants par mention

echo "<h3>Effectifs par mention</h3>";

$effectifs = [];

foreach ($notes as $note) {

    $m = mention($note);

    if (isset($effectifs[$m])) {
        $effectifs[$m]++;
    } else {
        $effectifs[$m] = 1;
    }
}

foreach ($effectifs as $m => $nombre) {
    echo $m . " : " . $nombre . "<br>";
}


// ========================================
// Exercice 3.4 : Tri
// ========================================

// Fonction d'affichage réutilisable

function afficher($tab) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Nom / Clé</th><th>Note / Valeur</th></tr>";

    foreach ($tab as $cle => $valeur) {
        echo "<tr>";
        echo "<td>" . $cle . "</td>";
        echo "<td>" . $valeur . "</td>";
        echo "</tr>";
    }

    echo "</table><br>";
}

echo "<h2>Exercice 3.4 : Tri</h2>";

// 1. Tri par noms croissants

ksort($notes);

echo "<h3>1. Noms croissants (ksort)</h3>";
afficher($notes);

// 2. Tri par notes décroissantes

arsort($notes);

echo "<h3>2. Notes décroissantes (arsort)</h3>";
afficher($notes);

// 3. Tri par noms décroissants

krsort($notes);

echo "<h3>3. Noms décroissants (krsort)</h3>";
afficher($notes);

// 4. Tri par notes croissantes

asort($notes);

echo "<h3>4. Notes croissantes (asort)</h3>";
afficher($notes);

// Question : tri d'un tableau indexé
echo "<h3>Tri du tableau des modules</h3>";

sort($modules);
afficher($modules);


// ========================================
// Exercice 3.5 : Opérateurs de tableaux
// ========================================

echo "<h2>Exercice 3.5 : Opérateurs de tableaux</h2>";

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "<h3>Résultat de \$a + \$b</h3>";
var_dump($a + $b);

echo "<h3>Résultat de \$a == \$b</h3>";
var_dump($a == $b);

echo "<h3>Résultat de \$a === \$b</h3>";
var_dump($a === $b);


include __DIR__ . "/includes/pied_inc.php";

?>
