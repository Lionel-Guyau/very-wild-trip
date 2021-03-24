<?php

include('destinations_data.php');

shuffle($destinations);
$destinations = array_slice($destinations, 0, 9);
echo "<div class ='tripPage'>";
echo "<p class='tripPageDescription'>Vous trouverez ici un échantillon de nos déstinations proposées par nos partenaires à travers le monde. </br> Rendez-vous sur notre page \"Votre Wild Trip\" afin de trouver la destination de vos rêves !!!</br>Vous pouvez <a href='trip.php'>rafraîchir la page</a> si vous souhaiter voir un autre échantillons de nos offres.</p>";

        
        foreach($destinations as $destination => $content) 
        {                        
                echo    "<div class='picturesContainer'>
                                {$content['name']} 
                                <div class='destinationImage'>{$content['image']}</div>
                                <div class='descriptionParagraph'>{$content['description']}</div>               
                        </div>";
        }
         
echo "</div>";
