<?php


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

            $find = false;

            foreach ($chambres as $chambre) {
                $disposeService = false;
                foreach($chambre["service"] as $service)
                {
                    if($service === $_POST['q'])
                    {
                        $disposeService = true;
                        $find =true;
                    }
                }
                if($disposeService) {

                    echo'<div class="col-md-6 col-lg-4 mb-3 text-center">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                <a href="index.php?section=chambre&nom='.$chambre["nom"].'">
                     <img class="mb-3" src="'.$chambre["photos"][0].'" /></a>

                   
                   <h2>'.$chambre["nom"].'</h2>
                   <h3>'.$chambre["taille"].'m2</h3>
                   
                </div>
                
                      <a class="btn btn-primary mt-3 btn-block" href="index.php?section=chambre&nom='.$chambre["nom"].'">voir la chambre</a>
            </div>';
                }
            }

            if(!$find)
            {

                echo"<h1>Aucune chambre ne correspond</h1>";
            }



            ?>

        </div>
    </div>
</section>

<?php
$hideH2 = true;
include("recherche.php");

?>