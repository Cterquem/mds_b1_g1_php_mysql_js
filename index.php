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