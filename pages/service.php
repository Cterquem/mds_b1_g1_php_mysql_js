<?php

$query = "SELECT * FROM services WHERE nom_service LIKE :nom";
$stmt = $dbh->prepare($query);
$stmt->execute(array('nom' => "%".$_POST["q"]."%"));
$services = $stmt->fetchAll();

?><!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Votre recherche : <?php echo $_POST["q"]; ?></h1>
        <!-- Icon Divider-->

        <!-- Masthead Subheading-->
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->

        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->



            <?php


            foreach ($services as $service) {

                $query = "SELECT * FROM chambres WHERE id = :idChambre";
                $stmt = $dbh->prepare($query);
                $stmt->execute(array('idChambre' => $service["chambre_id"]));
                $chambre = $stmt->fetch();

                afficheVignetteChambre($chambre);

            }

            if( count($services) === 0)
            {
                echo"<div class='col-12 alert alert-danger'>Aucune chambre ne correspond à cette recherche</div>";
            }




            ?>

        </div>
    </div>
</section>

<?php
$hideH2 = true;
include("recherche.php");

?>