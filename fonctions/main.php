<?php

function afficheChambre($chambre)
{
    global $dbh;
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
                   <h4>Liste des services : </h4></div>';

    $query = "SELECT * FROM services WHERE chambre_id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array('id' => $_GET["id"]));
    $services = $stmt->fetchAll();

    foreach($services as $service)
    {
        echo"<div class='col alert alert-primary p-5 m-5 text-center rounded'>{$service['nom_service']}</div>";
    }


    echo '<div class="col-12"><hr /><h2>Photo de la chambre</h2></div>';


    $query = "SELECT * FROM photos WHERE chambre_id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array('id' => $_GET["id"]));
    $photos = $stmt->fetchAll();

    foreach ($photos as $photo) {
        echo'<div class="col-md-6 col-lg-4 mb-3 text-center">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               <img src="'.$photo['path'].'" />
                            </div>

                        </div>';
    }



    echo "<div class=\"col-12\"><hr ><h1>Avis clients</h1></div>";

    $query = "SELECT * FROM avis WHERE chambre_id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array('id' => $_GET["id"]));
    $avis = $stmt->fetchAll();

    foreach($avis as $avi)
    {
        echo "<div class='col-3 alert alert-primary p-5 m-5 text-center rounded'>{$avi['nom']} - {$avi['contenu']} - {$avi['note']}/5</div>";
    }


    echo'</div>';
}

function afficheVignetteChambre($chambre)
{
    echo'<div class="col-md-6 col-lg-4 mb-3 text-center">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                <a href="index.php?section=chambre&id='.$chambre["id"].'">

                   
                   <h2>'.$chambre["nom"].'</h2>
                   <h3>'.$chambre["taille"].'m2</h3>
                   
                </div>
                
                      <a class="btn btn-primary mt-3 btn-block" href="index.php?section=chambre&id='.$chambre["id"].'">voir la chambre</a>
            </div>';
}