<?php

include('destinations_data.php');

shuffle($destinations);
$destinations = array_slice($destinations, 0, 5);
?>

<div class ='tripPage'>

        <p class='tripPageDescription'>
                Vous trouverez ici un échantillon de nos déstinations proposées par nos partenaires à travers le monde. </br> Rendez-vous sur notre page \"Votre Wild Trip\" afin de trouver la destination de vos rêves !!!</br>Vous pouvez <a href='trip.php'>rafraîchir la page</a> si vous souhaiter voir un autre échantillons de nos offres.
        </p>

                <?php
                foreach($destinations as $destination => $content) 
                {?>                      
                        <div class='picturesContainer'>
                                <h2>
                                        <?=$content['name']?>
                                </h2>

                                <img    <?=$content['image']?>>
                                
                                <p>
                                        <?=$content['description']?>
                                </p>

                        </div>
                <?php } ?>
                
</div>