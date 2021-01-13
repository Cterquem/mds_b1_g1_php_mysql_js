<?php

//exercice 2

$chambres = [];

$chambre1 = [];
$chambre1["nom"] = "La suite";
$chambre1["taille"] = 100;
$chambre1["service"] = ["wifi","bluetooth","douche"];

$chambres[] = $chambre1;

$chambre2 = [];
$chambre2["nom"] = "La lodge";
$chambre2["taille"] = 200;
$chambre2["service"] = ["wifi","baignoire"];

$chambres[] = $chambre2;

$chambre3 = [];
$chambre3["nom"] = "La mini";
$chambre3["taille"] = 50;
$chambre3["service"] = ["wifi","douche"];

$chambres[] = $chambre3;

//exercice 1 :
//afficher la liste des chambres
//<ul><li>La suite</li></li>La lodge, ...</li></ul>

echo "<ul>";
foreach($chambres as $chambre) {
    echo "<li>" . $chambre["nom"] . "</li>";
    echo "<li> {$chambre["nom"]} </li>";
}
echo"</ul>";

//exercice 2 : afficher la liste des chambres et de leur service :
//<ul><li>La suite proposent : <ul><li>wifi</li><li>bluetooth</li></ul></li></li>La lodge, ...</li></ul>

//exercice 3 : afficher la liste des chambres qui proposent une baignoire
//<ul><li>La lodge, ...</li></ul>

//exercice 4 : créer un début de site avec une page d'accueil qui affiche toutes les chambres
//et quand on clique sur une chambre on arrive sur une nouvelle page avec toutes les informations de la chambre
// La suite<a href="chambre.php">voir la fiche de la chambre</a>