<?php
session_start();

include "parts/menu.php";

if( isset($_GET["section"])  && file_exists("pages/" . $_GET["section"] . ".php")  )
{
    include "pages/" . $_GET["section"] . ".php";
} else
{
    include "pages/accueil.php";
}













