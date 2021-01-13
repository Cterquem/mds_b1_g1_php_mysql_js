<h1>Exercice 3 :</h1>

<p><a href="exercice3.php?valeur=tartufle">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot : tartfufle</a></p>

<p><a href="exercice3.php?mot=algebre">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot : algebre et tartufle</a></p>

<p><a href="exercice3.php?calcul=moyenne&nombreA=3&nombreB=4&nombreC=7">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3,4 et 7</a></p>

<p><a href="exercice3.php?calcul=moyenne&nombreA=3&nombreB=8">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3 et 8</a></p>

<p><a href="exercice3.php?calcul=moyenne&nombreB=3&nombreC=3">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3 et 8</a></p>

<p><a href="exercice3.php">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot "rien"</a></p>


<hr />

<h2>Solution : </h2>

<div style="border:1px solid red; width: 200px; height: 200px;">
    <?php

    //votre code ici ///////////////////// début
    //if(  isset($_GET["mot"]) === false && isset($_GET["valeur"]) === false && isset($_GET["calcul"]) === false )
    if(  !isset($_GET["mot"]) && !isset($_GET["valeur"]) && !isset($_GET["calcul"]) )
    {
        echo "rien";
    }

    if(  count($_GET) === 0  )
    {
        echo "rien";
    }

    if(isset($_GET["mot"]) && $_GET["mot"] === "algebre")
    {
        echo'algebre et tartufle';
    }

    if(isset($_GET["valeur"]) && $_GET["valeur"] === "tartufle")
    {
        echo'tartufle';
    }

    if(isset($_GET["calcul"]) )
    {
        if($_GET["calcul"] === "moyenne")
        {
            $total = 0;
            $nbElement = 0;
            if( isset($_GET["nombreA"]) )
            {
                $total += (int)$_GET["nombreA"];
                $nbElement++;
            }

            if( isset($_GET["nombreB"]) )
            {
                $total += (int)$_GET["nombreB"];
                $nbElement++;
            }

            if( isset($_GET["nombreC"]) )
            {
                $total = $total + (int)$_GET["nombreC"];
                $nbElement = $nbElement + 1;
            }

            if(  $nbElement > 0)
            {
                echo $total / $nbElement;
            }

        }


    }







    /////////////////////////////////////// fin
    ?>
</div>