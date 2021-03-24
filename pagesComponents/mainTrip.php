<?php

include('destinations_data.php');

shuffle($destinations);
$destinations = array_slice($destinations, 0, 10);
echo "<div class ='tripPage'>";
echo "<p class='tripPageDescription'>Vous trouverez ici un échantillon de nos déstinations proposées par nos partenaires à travers le mondes. </br> Rendez-vous sur notre page \"Votre Wild Trip\" afin de trouver la déstinations de vos rèves !!!</p>";

        
        foreach($destinations as $destination => $content) 
        {                        
                echo    "<div class='picturesContainer'>
                                {$content['name']} 
                                <div class='destinationImage'>{$content['image']}</div>
                                <div class='descriptionParagraph'>{$content['description']}</div>               
                        </div>";
        }
         
echo "</div>";
