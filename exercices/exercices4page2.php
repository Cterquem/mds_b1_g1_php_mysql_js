<?php

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
            afficheMetier($metier);
        }
    }
}
//exercice 3
if(isset($_GET["boulot"]))
{
    foreach ($metiers as $metier)
    {
        if($_GET["boulot"] === $metier["nom"])
        {
            afficheMetier($metier);
        }
    }
}

//exercice 4

if(isset($_POST["formulaire"]))
    {
        foreach ($metiers as $metier)
            {
                    $find = false;
                    foreach ($metier["competences"] as $competence)
                    {
                        if($competence === $_POST["formulaire"])
                        {
                            $find = true;
                        }
                    }

                    if($find)
                    {
                            afficheMetier($metier);
                    }
                }
    }
