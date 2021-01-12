<?php

include "menu.php";

echo"<h2>Contact</h2>";

?>


<form action="contact.php" method="get">

    <input name="nom" type="text">

    <input type="submit" value="Envoyer mon nom">

</form>


<form action="index.php" method="post">

    <input name="recherche" type="text">

    <input type="submit" value="Faire une recherche">
