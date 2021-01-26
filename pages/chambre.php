<?php


$query = "SELECT * FROM chambres WHERE id = :id";
$stmt = $dbh->prepare($query);
$stmt->execute(array('id' => $_GET["id"]));
$chambre = $stmt->fetch();

?><!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"><?php echo $chambre["nom"]; ?></h1>
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

            afficheChambre($chambre);

            ?>

        </div>
    </div>
</section>



<?php

    include("recherche.php");

?>