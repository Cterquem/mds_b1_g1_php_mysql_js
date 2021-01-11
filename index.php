<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function addition($nombreA,$nombreB)
    {

    }


    function soustraction($nombreA,$nombreB)
    {

    }

    function division($nombreA,$nombreB)
    {
        //à remplir
    }

    function afficherResultat($type,$nombreA, $nombreB)
    {
        //à remplir
    }

    $resultat = afficherResultat("addition",5,10);
    echo "Le résultat est $resultat <br />";

    $resultat = afficherResultat("soustraction",3,10);
    echo "Le résultat est $resultat <br />";

    //gérer le fait qu'on ne peut pas diviser par zéro
    $resultat = afficherResultat("division",5,3);
    echo "Le résultat est $resultat <br />";

    //gérer le fait qu'on ne peut pas diviser par zéro
    $resultat = afficherResultat("division",5,0);
    echo "Le résultat est $resultat <br />";





















    $nbMsg = 105;
    $registrationDate = new DateTime("2020-07-08 11:14:15");
    $isAdmin = false;

    // Nombre de jours depuis l'inscription de l'utilisateur
    $registrationDays = $registrationDate->diff(new DateTime("now"))->days;

//    if($isAdmin) {
//        echo 'Administrateur';
//    } else if ($nbMsg > 50 && $registrationDays < 30) {
//        echo 'Flood';
//    } else if ($nbMsg > 50 || $registrationDays >= 365) {
//        echo 'Utilisateur VIP';
//    } else {
//        echo 'Utilisateur débutant';
//    }
//
//    if($score > 0 )
//    {
//        $message = "Vous avez gagné";
//    } else
//    {
//        $message = "Vous avez perdu";
//    }

//    $message = ($score > 0) ? "Vous avez gagné" : "Vous avez perdu";

//    echo $message;






















        $nombreA = 10;
        $nombreB = 20;

        $totalAB = $nombreA + $nombreB;

        $moyenne = ($nombreA + $nombreB) / 2;

//        echo "Le total est $totalAB";
//
//        echo "<hr/>";
//
//        echo 'La moyenne est '.$moyenne;
//
//        echo 'Le total d\'aujourd\'hui est ' . $totalAB;
//        echo "Le total d'aujourd'hui est " . $totalAB;


?>
