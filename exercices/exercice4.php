<?php

session_start();

$metiers = [];

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


////// exercice 1 : afficher tous les métiers et leurs compétences
///
///
/// exercice 2 : créer un formulaire de recherche (le mot exact)
/// qui va pointer vers la page exercices4ppage2.php
/// et dans cette page exercices4page2.php n'afficher que le métier (et ses compétences) qui correspond à la recherche
///
///
/// exercice 3 : dans la liste de la page exercices4.php de pouvoir cliquer sur le nom d'un métier
/// et quand on clique on arrive exercice4page2.php et s'affiche uniquement le métier (avec ses compétences)
///
///
/// exercices 4 : de faire un formulaire pour les compétences et de pouvoir cliquer sur les compétences
///
///
///
////// exercice 1 : afficher tous les métiers et leurs compétences

echo"<ul>";
foreach ($metiers as $metier)
{
    echo "<li><a href='exercices4page2.php?boulot=".$metier["nom"]."'>".$metier["nom"]."</a>";
    echo"<ul>";
    foreach ($metier["competences"] as $competences)
    {
        echo "<li>".$competences."</li>";
    }
    echo"</ul></li>";
}
echo"</ul>";
echo"<hr />";

///
/// exercice 2 : créer un formulaire de recherche (le mot exact)
/// qui va pointer vers la page exercices4ppage2.php
/// et dans cette page exercices4page2.php n'afficher que les métiers qui correspondent à la recherche

?>

<form action="exercices4page2.php" method="post">
    <input name="recherche"  value="<?php if(isset($_COOKIE["lastRecherche"])) echo $_COOKIE["lastRecherche"]; ?>" type="text">
    <input type="submit" value="Faire une recherche par metier">
</form>

<?php

/// exercice 3 : dans la liste de la page exercices4.php de pouvoir cliquer sur le nom d'un métier
/// et quand on clique on arrive exercice4page2.php et s'affiche uniquement le métier (avec ses compétences)

///
/// exercices 4 : de faire un formulaire pour les compétences et de pouvoir cliquer sur les compétences
///
///
?>
<form action="exercices4page2.php" method="post">
    <input name="recherche"  value="<?php if(isset($_SESSION["lastRecherche"])) echo $_SESSION["lastRecherche"]; ?>" type="text">
    <input type="submit" value="Faire une recherche par compétences">
</form>