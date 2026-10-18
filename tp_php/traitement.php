<?php
require __DIR__ . "/config.php";

if (
    isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"])
    && trim($_POST["nom"]) !== ""
    && trim($_POST["note_info"]) !== ""
    && trim($_POST["note_math"]) !== ""
) {
    $nom = trim($_POST["nom"]);
    $noteInfo = $_POST["note_info"];
    $noteMath = $_POST["note_math"];

    if (
        is_numeric($noteInfo)
        && is_numeric($noteMath)
        && $noteInfo >= NOTE_MIN && $noteInfo <= NOTE_MAX
        && $noteMath >= NOTE_MIN && $noteMath <= NOTE_MAX
    ) {
        $fichier = __DIR__ . "/data/notes.csv";
        $handle = fopen($fichier, "a");

        if ($handle === false) {
            exit("Erreur : impossible d'ouvrir le fichier CSV.");
        }

        fputcsv(
            $handle,
            [$nom, $noteInfo, $noteMath],
            ";"
        );

        fclose($handle);

        echo "Les données ont été enregistrées avec succès.";
        echo "<br><a href='liste.php'>Voir la liste</a>";
    } else {
        echo "Erreur : les notes doivent être entre 0 et 20.";
    }
} else {
    echo "Erreur : veuillez remplir tous les champs.";
}
?>
