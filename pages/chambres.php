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

foreach ($chambres as $chambre) {

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
echo "</ul>";

?>

        </div>
    </div>
</section>