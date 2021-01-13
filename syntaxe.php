<?php


//Le passage d'information entre les pages /////////////////////////////////////////////////

        //le tableau GET est en tout disponible, il contient les paramètres passées dans l'url de la page
        var_dump($_GET);

        //vérification qu'un élément est dans le tableau $_GET
        if( isset($_GET["parametre"]))
        {
            //affichage de la valeur
            echo $_GET["parametre"];
        }

        //la création d'une url :
        echo "<a href='mapage.php?parametre=valeur'>le lien</a>";
        echo "<a href='mapage.php?parametre=valeur&deuxiemeParametre=autreValeur'>le lien</a>";

//L es tableaux multidimensionnelles  //////////////////////////////////////////////

    //définition d'un tableau
    $eleves = ["tom","etienne"];

    //définition d'un tableau
    $matieres = [];

    //définition d'un tableau
    $php = ["mysql",$eleves];
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
    echo $tableau[1]; //affiche banane

    //sécurité : avant d'accéder on vérifie si la donnée existe
    if( isset(  $tableau[0] )) {  echo $tableau[0]; }

    //on ajoute un élément dans un tableau
    $tableau[] = "fraise";

// les boucles /////////////////////////////////////////////////////////

    //pour parcourir un tableau il y a plusieurs possibilités
    //les trois codes suvants font exactement la même chose

    //première possibilité : foreach
    foreach ($classe2["eleves"] as $eleve)
    {
        echo $eleve["nom"]."<br />";
    }

    //deuxième possibilité : while
    $i = 0;
    while(  count($classe2["eleves"]) > $i  ) {
        echo $classe2["eleves"][$i]["nom"]."<br />";
        $i++;
    }

    //troisième possibilité : for
    //attention aux boucles infinies

    for($i = 0; count($classe2["eleves"]) > $i; $i++) {
        echo $classe2["eleves"][$i]["nom"]."<br />";
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



//Les conditions

    //Le if est obligatoire
    //Il peut y avoir 0 ou plusieurs else if
    //Il peut y avoir 0 ou 1 else (et il doit être en dernier
    if( $variable === true)
    {

    } else if( $variable2 === false)
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

        //la concaténation peut aussi se faire avec un point et ou des simples quotes
        echo 'La moyenne est '.$moyenne;

        //on peut aussi utiliser l'antislash pour échapper un caractère
        echo 'Le total d\'aujourd\'hui est ' . $totalAB;

        //incrémentation

        $total = 10;
        $total++; //on augmente de 1, donc $total vaut 11
        $total += 1; //on augmente de 1, donc $total vaut 12
        $total += 10; //on augmente de 10, donc $total vaut 22
        $total--; //on diminue de 1, donc $total vaut 21
        $total -= 1; //on diminue de 1, donc $total vaut 20
        $total -= 10; //on diminue de 10, donc $total vaut 10

?>

