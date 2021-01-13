<?php


//Le passage d'information entre les pages /////////////////////////////////////////////////

//le tableau $_GET est en tout temps disponible, il contient les paramètres passées dans l'url de la page
//var_dump uniquement pour du débuggage et affiche les données dans le navigateur
var_dump($_GET);

//vérification qu'un élément est dans le tableau $_GET
//isset renvoi un boolean
if( isset($_GET["parametre"]))
{
    //affichage de la valeur
    echo $_GET["parametre"];
}

//la création d'une url :
echo "<a href='mapage.php?parametre=valeur'>le lien</a>";
echo "<a href='mapage.php?parametre=valeur&deuxiemeParametre=autreValeur'>le lien</a>";

//Le tableau $_POST est en tout temps disponible, il contient toutes les variables contenu dans la requête POST
//pour lancer une requête en POST : formulaire, requête CURL, outils externe

?>
    <!-- formulaire en get qui ouvrira la page.php-->
    <form action="page.php" method="get">
    </form>
    <!-- formulaire en get qui ouvrira la page.php-->
    <form action="page.php" method="post">
        <input type="text" name="nom" />
        <input type="text" name="prenom" />
        <input type="submit">
    </form>
<?

//dans la page page.php
//si je clique sur le bouton du deuxième formulaire j'obtiendrais la valeur qui a été saisi dans le champs dans le tableau $_POST
echo $_POST["nom"]; //affichera ce qui a été saisi dans le formulaire dans le champs nom
echo $_POST["prenom"]; //affichera ce qui a été saisi dans le formulaire dans le champs prenom

//L es tableaux multidimensionnelles  //////////////////////////////////////////////

//définition d'un tableau
$eleves = ["tom","etienne"];

//définition d'un tableau
$matieres = [];

//définition d'un tableau
$php = [];
$php[] = "mysql";
$php[] = $eleves;
//on ajoute le tableau php dans le tableau matieres
$matieres[] = $php;

//définition d'un tableau
$sql = ["php",$eleves];
//on ajoute le tableau sql dans le tableau matieres
$matieres[] = $sql;

//on parcourt le tableau matieres, à chaque itération on récupère dans la variable matiere un élement du tableau
foreach($matieres as $matiere)
{
    echo"<p>La matière est ";
    //on affiche la première colonne du tableau matiere, qui est lui-même un élément du tableau matieres
    echo $matiere[0];
    echo"<p>La liste des prénom est : </p>";

    //on parcourt la première colonne du tableau matiere, qui est lui même un tableau
    foreach($matiere[1] as $eleve )
    {
        //on affiche la chaîne de caractère qu'on est en train de parcourir
        echo $eleve;
    }
}

// Les tableaux ////////////////////////////////////////////

//définition d'un tableau vide
$tableau = [];

//définition d'un tableau avec des données
$tableau = ["banane","tomate","licorne"];

//on accède aux éléments d'un tableau
echo $tableau[0]; //affiche banane
echo $tableau[1]; //affiche tomate

$tableauAssociatif = [];
$tableauAssociatif["nom"] = "toto";
$tableauAssociatif["age"] = 10;

echo $tableauAssociatif["nom"]." a ".$tableauAssociatif["age"]." ans";


//sécurité : avant d'accéder on vérifie si la donnée existe
//isset renvoyer un boolean
if( isset(  $tableau[0] )) {  echo $tableau[0]; }

//on ajoute un élément dans un tableau, j'ajoute "fraise" dans la première place disponible du tableau $tableau
$tableau[] = "fraise";

//count
//function qui permet de compter les éléments d'un tableau
echo count($tableau); // affiche 4

// les boucles /////////////////////////////////////////////////////////

//pour parcourir un tableau il y a plusieurs possibilités
//les trois codes suvants font exactement la même chose

//première possibilité : foreach
foreach ($eleves as $eleve)
{
    echo $eleve."<br />";
}


//deuxième possibilité : while
$i = 0;
//while(  count($eleves) > $i  ) {
while(  isset($eleves[$i])  ) {
    $eleve = $eleves[$i];
    echo $eleve."<br />";
    $i++; //obligatoire sinon boucle sans fin
}

//troisième possibilité : for
//attention aux boucles infinies
for($i = 0; count($eleves) > $i; $i++) {
    echo $eleves[$i]."<br />";
}


// Les fonctions ////////////////////////////////////////////////////

//Définition d'une fonction sans paramètre
function nomDeLaFonction()
{

}

//éxécution d'une fonction
nomDeLaFonction();

//Définition d'une fonction avec paramètre
function nomDeLaFonctionAvecParametre($parametre1,$parametre2)
{

}

//éxécution d'une fonction
nomDeLaFonctionAvecParametre("toto",10);

//portée des variables et return
$total = 10;

function nomDeLaFonctionAvecReturn($parametre1,$parametre2)
{
    //la variable $total n'est pas accessible dans la fonction, seule $parametre1 et $parametre2 sont accessibles

    //la fonction peut renvoyer une information
    return $parametre1 + $parametre2;
}

//lors de l'éxécution on peut récupérer, afficher, stocker le retour fait par la fonction et l'utiliser ensuite
$total = nomDeLaFonctionAvecReturn(10,23);
echo $total; //affiche 33
echo $total = nomDeLaFonctionAvecReturn(1,2); //affiche 3



//Les conditions

//Le if est obligatoire
//Il peut y avoir 0 ou plusieurs else if
//Il peut y avoir 0 ou 1 else (et il doit être en dernier
if( $variable === true) //équivalent if($variable){}
{

} else if( $variable2 === false) //équivalent if(!$variable2){}
{

} else
{

}

//équivalence
if( $boolean === true ) {}
if( $boolean ) {}

//équivalence
if( $boolean === false ) {}
if( !$boolean ) {}



// && || AND OR
if( $bool1 && $bool2 ) { } //$bool1 et $bool2 doivent tous les deux être vrai pour que la condition soit exécutée
if( $bool1 || $bool2 ) { } //$bool1 ou $bool2 doivent tous les deux être vrai pour que la condition soit exécutée


// Les variables ///////////////////////////////////////

//    Le nom des variables doit commencer par le signe dollars ($)
//    Le nom des variables doit être composé uniquement de caractères alpha-numériques (A-z, 0-9, et _ )
//    Le nom des variables ne doit pas contenir d’accents (utiliser un nommage en anglais ?)
//    Le nom des variables ne doit pas commencer par un chiffre
//    Le nom des variables est sensible à la casse (case-sensitive). Ainsi $var est différent de $Var
//    Lors de la déclaration, les variables ne sont pas typées

//définition d'une variable (de droite à gauche)
$nomDeLaVariable = "valeur";

//différents type de valeur
$nombreA = 10; //entier
$nombreB = 20; //entier
$flottant = 10.34; //flottant (en utilisant le point)
$rien = null; //null
$vrai = true; //boolean
$faux = false; //boolean
$tableau = []; //tableau


//mathématique
$totalAB = $nombreA + $nombreB;
$moyenne = ($nombreA + $nombreB) / 2;
$complexe = (($nombreB + $nombreA) / 2 * 3 ) / $nombreB;

//concatenation
//dans une chaîne de caractère avec des doubles quote on peut inclure une variable simple
echo "Le total est $totalAB";
echo "Le total est {$totalAB}"; //équivalent possible uniquement avec les doubles quotes

//la concaténation peut aussi se faire avec un point et ou des simples quotes
echo 'La moyenne est '.$moyenne;

//on peut aussi utiliser l'antislash pour échapper un caractère
echo 'Le total d\'aujourd\'hui est ' . $totalAB; //l'antislash est oblitatoire pour spécifier au php que la chaîne de caractère ne s'arrête pas au simple quote
echo "Le total d'aujourd'hui est " . $totalAB; //équivalent à la ligne du dessus

//incrémentation

$total = 10;
$total++; //on augmente de 1, donc $total vaut 11
$total += 1; //on augmente de 1, donc $total vaut 12 équivalent de $total = $total + 1;
$total = $total + 1; //équivalente au deux précédentes
$total += 10; //on augmente de 10, donc $total vaut 22 équivalent de $total = $total + 10;
$total--; //on diminue de 1, donc $total vaut 21
$total -= 1; //on diminue de 1, donc $total vaut 20
$total -= 10; //on diminue de 10, donc $total vaut 10

?>