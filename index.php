<?php
require_once 'class/Text.php';

// $txt = new Text();
Text::displayTxt("Je suis un Loup"); /* On appelle la classe directement */
echo Text::withzero(0);

Text::withzero(8);

/* Je veut une fonction statique qui prend  */

$tab = [
	"Fonction normales",
	"Fonction statique",
	" Php c'est la base",
	"Adrec 2019",
];

Text::displayTab($tab);