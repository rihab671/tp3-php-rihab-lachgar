<?php
require __DIR__ . "/config.php";

$fichier = __DIR__ . "/data/notes.csv";

if (!file_exists($fichier)) {
    exit("Erreur : le fichier notes.csv n'existe pas.");
}

$handle = fopen($fichier, "r");

if ($handle === false) {
    exit("Erreur : impossible d'ouvrir le fichier CSV.");
}

$totalMoyennes = 0;
$nombreApprenants = 0;

echo "<h2>Liste des apprenants</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
      </tr>";

while (($ligne = fgetcsv($handle, 0, ";")) !== false) {
    if (count($ligne) < 3) {
        continue;
    }

    $nom = $ligne[0];
    $info = $ligne[1];
    $math = $ligne[2];

    if (!is_numeric($info) || !is_numeric($math)) {
        continue;
    }

    $moyenne = ((float)$info + (float)$math) / 2;

    if ($moyenne >= 16) {
        $mention = "Très bien";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
    } elseif ($moyenne >= 12) {
        $mention = "Assez bien";
    } elseif ($moyenne >= SEUIL) {
        $mention = "Passable";
    } else {
        $mention = "Ajourné";
    }

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>" . htmlspecialchars((string)$info) . "</td>";
    echo "<td>" . htmlspecialchars((string)$math) . "</td>";
    echo "<td>" . number_format($moyenne, 2) . "</td>";
    echo "<td>" . $mention . "</td>";
    echo "</tr>";

    $totalMoyennes += $moyenne;
    $nombreApprenants++;
}

fclose($handle);

echo "</table>";

if ($nombreApprenants > 0) {
    $moyenneGenerale = $totalMoyennes / $nombreApprenants;
    echo "<p>Moyenne générale de la classe : "
        . number_format($moyenneGenerale, 2)
        . "</p>";
} else {
    echo "<p>Aucun apprenant enregistré.</p>";
}
?>
