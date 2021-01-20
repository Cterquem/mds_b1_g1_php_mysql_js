<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <?php if(!isset($hideH2)) { ?><h1 class="masthead-heading text-uppercase mb-0">Recherche</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <div>
            <?php } ?>

            <div class="container-fluid"><div class="row">
            <div class="col-12 col-md-6 mt-5">
            <h2>Rechercher une chambre par son nom</h2>
            <form action="index.php?section=chambre" method="post">
                <input class="form-group" name="nom" style="width:100%" placeholder="Nom de la chambre à chercher" type="text">
                <input class="btn btn-light  btn-block" type="submit" value="Faire une recherche">
            </form>

            </div>

                    <div class="col-12 col-md-6 mt-5">
            <h2>Rechercher une chambre selon ses services</h2>

            <form action="index.php?section=service" method="post">
                <input name="q" class="form-group" style="width:100%" placeholder="Nom du service à chercher" type="text">
                <input class="btn btn-light btn-block" type="submit" value="Faire une recherche">
            </form>
            </div>

                </div></div>
        </div>
    </div>
</header>
