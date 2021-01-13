<?php


$chambres = [];

$chambre1 = [];
$chambre1["nom"] = "suite";
$chambre1["taille"] = 100;
$chambre1["service"] = ["wifi","bluetooth","douche"];

$chambres[] = $chambre1;

$chambre2 = [];
$chambre2["nom"] = "lodge";
$chambre2["taille"] = 200;
$chambre2["service"] = ["wifi","baignoire","baignoire"];

$chambres[] = $chambre2;

$chambre3 = [];
$chambre3["nom"] = "mini";
$chambre3["taille"] = 50;
$chambre3["service"] = ["wifi","douche"];

$chambres[] = $chambre3;


//////exercice 1 : afficher les toutes les chambres
///
/// exercice 2: afficher la recherche
/// si dans la page recherche.php dans le formulaire j'ai tappé lodge s'affichera : votre recherche est "lodge"
///
/// exercice 3 : lorsqu'il y a eu une recherche c'est d'afficher uniquement les chambres dont le nom correspond à la recherche
/// si j'ai tapé mini il y a uniquement la chambre mini qui s'affiche
///
/// exercice 4 : pouvoir faire une recherche aussi sur les services
/// si je recherche baignoire je n'affiche que la chambre lodge