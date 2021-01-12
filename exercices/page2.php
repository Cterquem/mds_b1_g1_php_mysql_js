<?php

function affichage($message)
{
    if(isset($_GET["message"]) && !isset($_GET["aleatoire"]))
    {
        echo $_GET["simple"];
    } else
    {
        echo "cheminée";
    }
}

if(isset($_GET["type"]) && $_GET["type"] === "fruit") echo "abricot";

if(isset($_GET["type2"]) && $_GET["type2"] === "animal") echo "abricot";

if(isset($_GET["calcul"]) && isset($_GET["a"]) && isset($_GET["b"]))
{
    switch($_GET["calcul"])
    {
        case "addition": echo ( (int)$_GET["a"]  + (int)$_GET["b"]); break;
        case "soustraction": echo ( (int)$_GET["a"]  - (int)$_GET["b"]); break;

    }
}

if(isset($_GET["simple"])) affichage( $_GET["simple"]  );