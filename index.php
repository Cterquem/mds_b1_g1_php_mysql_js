<?php




include "parts/menu.php";

if( isset($_GET["section"])  === true  ) {

    if ($_GET["section"] === "contact") {
        echo "<h3>Contact</h3>";

    } else if ($_GET["section"] === "produits") {
        echo "<h3>Produits</h3>";

        if (isset($_GET["page"]) && $_GET["page"] === 1) {
            echo "produit de la page 1";
        }
    } else if ($_GET["section"] === "archives") {
        echo "<h3>Archives</h3>";
    }
} else{

    echo "<h1>Accueil</h1>";
}











$php = [];
//ajoute "mysql" dans le tableau $php
$php[] = "php";
$php[] = $eleves;
//on ajoute le tableau php dans le tableau matieres

//définition d'un tableau
$sql = ["sql",$eleves];
$css = ["css",$eleves];

$matieres = [];
$matieres[] = $php;
$matieres[] = $sql;
$matieres[] = $css;

//on ajoute le tableau sql dans le tableau matieres


echo"<p>La liste des matières (".count($matieres).") est : </p>";

foreach($matieres as $matiere)
{
    echo $matiere;
}












