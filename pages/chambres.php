<?php if( !isset($hideH2) ) { ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Nos chambres</h1>
        <!-- Icon Divider-->

    </div>
</header>
<?php } ?>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->

        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->



<?php

$query = "SELECT * FROM chambres"; // Enregistrement de la requête SQL dans une variable
$stmt = $dbh->prepare($query); // Préparation de la requête et récupération d'un objet de type PDOStatement
$stmt->execute(); // Execution de la requête
$chambres = $stmt->fetchAll(); // Retourne l'ensemble des résultats de la requête sous forme de tableau (array)

foreach ($chambres as $chambre) {

   afficheVignetteChambre($chambre);
}



?>

        </div>
    </div>
</section>