<?php

include "parts/menu.php";

?>


<!--<form > équivalent car method par defaut get et l'action par défaut c'est le même fichier-->
<form action="contact.php" method="get">
    <input name="nom" type="text">
    <input name="password" type="text">
    <select name="categorie">
        <option>bateau</option>
        <option>voiture</option>
    </select>
    <input type="submit" value="Envoyer mon nom">
</form>


<form action="chambres.php" method="post">
    <input name="recherche" type="text">
    <input type="submit" value="Faire une recherche">
</form>
