<?php

session_start();

$dev1 = [];
$dev1["nom"] = "Développeur";
$dev1["competences"] = ["php","mysql","html","algo"];

$dev2 = [];
$dev2["nom"] = "Designer";
$dev2["competences"] = ["html","php","adobe","ux"];

$dev3 = [];
$dev3["nom"] = "Community Manager";
$dev3["competences"] = ["mysql","html","algo","php"];

$metiers[] = $dev1;
$metiers[] = $dev2;
$metiers[] = $dev3;


if(isset($_POST["recherche"]))
{
    setcookie("lastRecherche",$_POST["recherche"],time()+36000);
}

if(isset($_POST["formulaire"]))
{
    $_SESSION["lastRecherche"] = $_POST["formulaire"];
}


function afficheMetier($metier)
{
        echo "<li><a href='exercice4page2.php?boulot=".$metier["nom"]."'>".$metier["nom"]."</a>";
        echo"<ul>";
        foreach ($metier["competences"] as $competences)
        {
            echo "<li>".$competences."</li>";
        }
        echo"</ul></li>";
}

//exercice 2
if(isset($_POST["recherche"]))
{
    foreach ($metiers as $metier)
    {
        if($_POST["recherche"] === $metier["nom"] )
        {
            affichageMetier($metier);
        }
    }
}
//exercice 3
if(isset($_GET["boulot"]))
{
    foreach ($metiers as $metierRecherche)
    {
        if($_GET["boulot"] === $metierRecherche["nom"])
        {

            affichageMetier($$metierRecherche);

        }
    }
}

//exercice 4

if(isset($_POST["formulaire"]))
    {
        foreach ($metiers as $metierCompetence)
            {
                    $find = false;
                    foreach ($metierCompetence["competences"] as $competence)
                    {
                        if($competence === $_POST["formulaire"])
                        {
                            $find = true;
                        }
                    }

                    if($find)
                    {
                       affichageMetier($metierCompetence);
                    }
                }
    }
