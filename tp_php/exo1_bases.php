<?php
// EXERCICE 1.1 : NOMS DE VARIABLES

// $x : valide, commence par une lettre.
$x = 10;

// $_x : valide, commence par un underscore.
$_x = 20;

// $2x : invalide, commence par un chiffre.

// $x-y : invalide, contient un tiret.

// $Prix_HT : valide, lettres et underscore autorisés.
$Prix_HT = 100;

// $prix ht : invalide, contient un espace.

// $état : valide en PHP 8.
$état = "Maroc";

// $a et $A sont deux variables distinctes.
$a = 5;
$A = 15;

echo "Valeur de a : " . $a . "<br>";
echo "Valeur de A : " . $A . "<br>";

require __DIR__ . "/config.php";

echo "<h3>Exercice 1.2</h3>";

echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";

var_dump(defined("SEUIL"));
echo "<br>";

var_dump(defined("INCONNUE"));
echo "<br>";

// Une constante non définie provoque une erreur
// de type Error si on tente de l'utiliser directement.
// const déclare une constante.
// define() définit une constante avec une fonction.
// define() peut être appelée conditionnellement.


// EXERCICE 1.3 : CALCUL

echo "<h3>Exercice 1.3</h3>";

$prix_ht = 60;
$tva = 20;

$montant_tva = $prix_ht * $tva / 100;
$prix_ttc = $prix_ht + $montant_tva;

echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";


// EXERCICE 1.4 : TYPES ET CONVERSIONS


echo "<h3>Exercice 1.4</h3>";

// 1. Conversion en string
$test = 42;
$test = (string) $test;

var_dump($test);
echo "<br>";

// 2. Conversion en bool
var_dump((bool) 0);
echo "<br>";

var_dump((bool) 0.0);
echo "<br>";

var_dump((bool) "0");
echo "<br>";

var_dump((bool) "");
echo "<br>";

var_dump((bool) "abc");
echo "<br>";

var_dump((bool) []);
echo "<br>";

var_dump((bool) null);
echo "<br>";

// 3. Autres conversions
var_dump((int) 3.9);
echo "<br>";

var_dump((int) "12abc");
echo "<br>";

var_dump((float) "1.5e3");
echo "<br>";

var_dump((int) true);
echo "<br>";

// 4. Nombre 255 dans quatre bases
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimal : " . $decimal . "<br>";
echo "Hexadécimal : " . dechex($hexadecimal) . "<br>";
echo "Octal : " . decoct($octal) . "<br>";
echo "Binaire : " . decbin($binaire) . "<br>";


// EXERCICE 1.5 : CHAINES DE CARACTERES

echo "<h3>Exercice 1.5</h3>";

$traitees = "égales à";
$ici = 2;

// 1. Guillemets et apostrophe
echo "Ahmed a dit : \"J'ai réussi\"<br>";

// 2. Antislashs
echo 'Voulez-vous supprimer C:\*.*?' . "<br>";

// 3. Afficher \n tel quel
echo 'Ceci n\'affichera pas \n de nouvelle ligne' . "<br>";

// 4. Variables non interprétées
echo 'Les variables ne seront pas $traitees $ici' . "<br>";

// 5. Variables interprétées
echo "Les variables seront {$traitees} {$ici}<br>";

// Supprimer les étoiles
$texte = "*Bonjour les développeurs*";
$resultat = trim($texte, "*");

echo $resultat . "<br>";

// Afficher chaque lettre sur une ligne
$mot = "Bonjour";

for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}

?>
