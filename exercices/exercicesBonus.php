<?php

///CODE A ECRIRE /////////////////////////












//FIN DU CODE A ECRIRE, ne pas toucher en dessous

foreach($voitures as $voiture)
{
    echo "<p>La voiture est un modèle".$voiture["modele"];
    echo " de la marque ".$voiture["marque"];
    echo " de l'année ".$voiture["annee"]."</p>";


    echo"<p>Cette voiture possède ".count($voiture["options"]). "options :</p>";

    echo "<ul>";

    foreach($voiture["options"] as $option)
    {
        echo "<li>$option</li>";
    }
    echo"</ul>";

    echo"<p>Voici les caractéristiques de ce modèle :</p>";

    echo "<ul>";

    foreach($voiture["caracteristiques"] as $caracteristique)
    {
        echo "<li>".$caracteristique["libelle"]." (coût : ".$caracteristique["tarif"]."€)</li>";
    }
    echo"</ul>";


}