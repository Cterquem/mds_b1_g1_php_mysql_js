<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<?php include "parts/header.php"; ?>

<body id="page-top">

<?php

include "data/chambres.php";

include "parts/menu.php";

if( isset($_GET["section"])  && file_exists("pages/" . $_GET["section"] . ".php")  )
{
    include "pages/" . $_GET["section"] . ".php";
} else
{
    include "pages/accueil.php";
}

include "parts/footer.php";
