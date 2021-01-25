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



                    echo '
                <div class="col-8 text-center">

                   <h2>Nom : ' . $chambre["nom"] . ' (' . $chambre["taille"] . 'm2)</h2>
                   
                   <p>'.$chambre["description"].'</p>
                </div>
                <div class="col-4 text-center">
                    <h3 class="float-right bg-primary text-white rounded m-5 p-4">'.$chambre["tarif"].'€ / nuit</h3>
                  </div>
                   <div class="col-12 text-center">

                   <hr />
                   <h4>Liste des services : </h4><ul>';

                    ///TODO : à afficher correction
                    echo "<h1>A FAIRE</h1>";


                    echo '</div> <div class="col-12"><hr /><h2>Photo de la chambre</h2></div>';


            ///TODO : à afficher
            echo "<div class=\"col-12\"><h1>A FAIRE</h1></div>";



//                    foreach ($chambre["photos"] as $photo) {
//                        echo'<div class="col-md-6 col-lg-4 mb-3 text-center">
//                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
//                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
//                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
//                                </div>
//                               <img src="'.$photo.'" />
//                            </div>
//
//                        </div>';
//                    }



            ///TODO : à afficher
            echo "<div class=\"col-12\"><hr ><h1>Avis clients</h1>";
            echo "<h1>A FAIRE</h1></div>";

                    echo'</div>';


            ?>

        </div>
    </div>
</section>

<?php

    include("recherche.php");

?>