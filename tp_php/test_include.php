<?php
//Expérience 1 :
/* 
#########Test avec include : #############

include "fichier_inexistant.php";
echo "Suite du script";
*/
//include affiche un avertissement, mais le script continue


// Test avec require :
/*
require "fichier_inexistant.php";
echo "Suite du script";
*/
// require provoque une erreur fatale et arrête le script,
// donc "Suite du script" ne s'affiche pas.

// Expérience 2 :
/*
include "includes/menu_inc.php";
include "includes/menu_inc.php";
*/
// Test avec include :

/*
include "includes/menu_inc.php";
include "includes/menu_inc.php";
*/
// Le menu est inclus deux fois.

include_once "includes/menu_inc.php";
include_once "includes/menu_inc.php";

?>