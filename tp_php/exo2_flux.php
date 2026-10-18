<?php
require __DIR__ . "/config.php";

// Exercice 2.1 : if / elseif / else

echo "<h2>Exercice 2.1 : if / elseif / else</h2>";

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

echo "Note 17 : " . mention(17) . "<br>";
echo "Note 15 : " . mention(15) . "<br>";
echo "Note 13 : " . mention(13) . "<br>";
echo "Note 10 : " . mention(10) . "<br>";
echo "Note 8 : " . mention(8) . "<br>";

// Exercice 2.2 : switch

echo "<h2>Exercice 2.2 : switch</h2>";

$mois = date("m");

switch ($mois) {
    case "01":
        echo "Janvier";
        break;
    case "02":
        echo "Février";
        break;
    case "03":
        echo "Mars";
        break;
    case "04":
        echo "Avril";
        break;
    case "05":
        echo "Mai";
        break;
    case "06":
        echo "Juin";
        break;
    case "07":
        echo "Juillet";
        break;
    case "08":
        echo "Août";
        break;
    case "09":
        echo "Septembre";
        break;
    case "10":
        echo "Octobre";
        break;
    case "11":
        echo "Novembre";
        break;
    case "12":
        echo "Décembre";
        break;
    default:
        echo "Mois invalide";
}

echo "<br>";

// Question : sans break, PHP continue dans les cases suivants
// jusqu'à rencontrer un break ou la fin du switch.

// Exercice 2.3 : Boucles

echo "<h2>Exercice 2.3 : Boucles</h2>";


// Question 1 : triangle avec deux boucles for

echo "<h3>Question 1 : Triangle</h3>";

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

// Question 2 : while, nombres de 0 à 20 par pas de 2

echo "<h3>Question 2 : while</h3>";

$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>" . $i . "</strong>";
    } else {
        echo $i;
    }

    echo "<br>";
    $i += 2;
}


// Question 3 : for et continue, nombres pairs de 0 à 10

echo "<h3>Question 3 : for et continue</h3>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo $i . "<br>";
}


// Question 4 : while, switch et break 2

echo "<h3>Question 4 : while, switch et break 2</h3>";

$i = 1;

while ($i <= 12) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;

        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }

    $i++;
}


// Question 5 : do-while, nombres de 0 à 20 par pas de 2

echo "<h3>Question 5 : do-while</h3>";

$i = 0;

do {
    if ($i == 10) {
        echo "<strong>" . $i . "</strong>";
    } else {
        echo $i;
    }

    echo "<br>";
    $i += 2;

} while ($i <= 20);

?>
