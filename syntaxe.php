<?php

$eleves = ["tom","etienne"];

    $matieres = [];
    $php = ["mysql",$eleves];
    $matieres[] = $php;

    $sql = ["php",$eleves];
    $matieres[] = $sql;


    foreach($matieres as $matiere)
    {
        echo"<p>La matière est ";
        echo $matiere[0];
        echo"<p>La liste des prénom est : </p>";
        foreach($matiere[1] as $eleve )
        {
            echo $eleve;
        }
    }






























    //Les tableaux
    $classe1 = [];
    $classe1['nom'] = 'Dev1';
    $classe1['eleves'] = [];

    $classe2 = [];
    $classe2['nom'] = 'Dev2';
    $classe2['eleves'] = [];

    $etudiant1 = [];
    $etudiant1['nom'] = 'Dupont';
    $etudiant1['prenom'] = 'Jean';
    $etudiant1['age'] = 19;

    $etudiant2 = [];
    $etudiant2['nom'] = 'Toto';
    $etudiant2['prenom'] = 'Titi';
    $etudiant2['age'] = 22;

    $etudiant3 = [];
    $etudiant3['nom'] = 'Tom';
    $etudiant3['prenom'] = 'Xxxx';
    $etudiant3['age'] = 24;

    $classe1['eleves'][] = $etudiant1;
    $classe2['eleves'][] = $etudiant2;
    $classe2['eleves'][] = $etudiant3;


    function afficherEleveNumero($classe,$numero){
        //on vérifie si l'élève existe
        if($classe['eleves'][$numero])
        {
            //on récupère l'élève
            $eleve = $classe['eleves'][$numero];

            //on affiche la phrase
            echo "L'élève numéro $numero s'appelle {$eleve['nom']} {$eleve['prenom']}";
        } else
        {
            echo"Aucun élève ne correspond";
        }

    }

    afficherEleveNumero($classe2,1); //L'élève numéro 1 s'appelle Tom Xxxxx
    afficherEleveNumero($classe1,0); //L'élève numéro 0 s'appelle Dupont Jean

    function afficherListeEleves($classe){
        //on récupère le nombre d'élève
        $nbEleves = count($classe['eleves']);
        echo "<p>Liste des élèves (".$nbEleves." élève".(  $nbEleves > 0 ? "s" : "" ).") de la classe ".$classe["nom"]." :</p>";
        echo"<ul>";
        //on parcourt la liste des élèves de la classe
        foreach ($classe['eleves'] as $eleve)
        {
            echo"<li>".$eleve["nom"]." ".$eleve["prenom"]."</li>";
        }
        echo"</ul>";
    }



    afficherListeEleves($classe1);
        //<p>Liste des élèves (1 élève) de la classe Dev 1 :</p><ul>
        //<li>Dupont Jean</li>
        //</ul>

    afficherListeEleves($classe2);
    //<p>Liste des élèves (2 élèves) de la classe Dev 2 :</p><ul>
    //<li>Dupont Jean</li>
    //</ul>

    function ajouterEleve(&$classe,$nom,$prenom,$dateNaissance)
    {
        //on créé un nouvel élève
        $newEleve["nom"] = $nom;
        $newEleve["prenom"] = $prenom;
        //on calcule son âge
        $newEleve["age"] =  (new DateTime("now"))->format("Y") - $dateNaissance;

        //on ajoute l'élève à la liste des élèves de la classe et on récupère le nombre d'élèves
        return array_push( $classe["eleves"],$newEleve);
    }

    $idEleve = ajouterEleve($classe1,"son nom","son prenom",1990);
    //1

    echo"<hr />";

    foreach ($classe2["eleves"] as $eleve)
    {
        echo $eleve["nom"]."<br />";
    }

    $i = 0;
    while(  count($classe2["eleves"]) > $i  ) {
        echo $classe2["eleves"][$i]["nom"]."<br />";
        $i++;
    }

    for($i = 0; count($classe2["eleves"]) > $i; $i++) {
        echo $classe2["eleves"][$i]["nom"]."<br />";
    }


    $compteur = 3;
    while($compteur > 0) {
        echo $compteur . '<br />';
        $compteur--;
    }

    for($pourcentage = 3; $compteur > 0; $compteur--) {
        echo $compteur . '<br />';
    }




echo"<hr />";

    //FONCTIONS

    function addition($nombreA,$nombreB)
    {
        return $nombreA + $nombreB;
    }


    function soustraction($nombreA,$nombreB)
    {
        return $nombreA - $nombreB;
    }

    function division($nombreA,$nombreB)
    {
        return ($nombreB === 0) ? "impossible" : $nombreA / $nombreB;
    }

    function afficherResultat($type,$nombreA, $nombreB)
    {
        switch ($type)
        {
            case "addition" : return addition($nombreA,$nombreB); break;
            case "soustraction" : return soustraction($nombreA,$nombreB); break;
            case "division" : return division($nombreA,$nombreB); break;

        }
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



    //Variables

    $nbMsg = 105;
    $registrationDate = new DateTime("2020-07-08 11:14:15");
    $isAdmin = false;

    // Nombre de jours depuis l'inscription de l'utilisateur
    $registrationDays = $registrationDate->diff(new DateTime("now"))->days;

    if($isAdmin) {
        echo 'Administrateur';
    } else if ($nbMsg > 50 && $registrationDays < 30) {
        echo 'Flood';
    } else if ($nbMsg > 50 || $registrationDays >= 365) {
        echo 'Utilisateur VIP';
    } else {
        echo 'Utilisateur débutant';
    }

    echo"<hr />";
    $score = 10;
    if($score > 0 )
    {
        $message = "Vous avez gagné";
    } else
    {
        $message = "Vous avez perdu";
    }

    echo $message = ($score > 0) ? "Vous avez gagné" : "Vous avez perdu";




echo"<hr />";


        $nombreA = 10;
        $nombreB = 20;

        $totalAB = $nombreA + $nombreB;
        //       fleche vers la gauche
        $moyenne = ($nombreA + $nombreB) / 2;

        echo "Le total est $totalAB";

        echo "<hr/>";

        echo 'La moyenne est '.$moyenne;

        echo "<hr/>";

        echo 'Le total d\'aujourd\'hui est ' . $totalAB;

echo "<hr/>";

echo "Le total d'aujourd'hui est " . $totalAB;


?>
