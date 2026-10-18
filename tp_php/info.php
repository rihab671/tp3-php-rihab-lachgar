<?php
if (isset($_GET["nom"], $_GET["prenom"], $_GET["sexe"])) {
    $nom = htmlspecialchars($_GET["nom"]);
    $prenom = htmlspecialchars($_GET["prenom"]);
    $sexe = $_GET["sexe"];
    if ($sexe == "M") {
        echo "Bonjour Monsieur " . $prenom . " " . $nom;
    }elseif ($sexe == "F") {
        echo "Bonjour Madame " . $prenom . " " . $nom;
    } else {
        echo "Sexe invalide";
    }
    } else {
    echo "Veuillez remplir le formulaire.";
    }
?>
