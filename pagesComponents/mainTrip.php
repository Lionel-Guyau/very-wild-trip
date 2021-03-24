<?php

include('destinations_data.php');

shuffle($destinations);
$destinations = array_slice($destinations, 0, 10);
echo "<div class ='tripPage'>";
echo "<p class='tripPageDescription'>Vous trouverez ici toutes nos déstinations proposées par nos partenaires à travers le mondes, n'hésités pas à vous balader parmis ces déstinations de choix.</p>";

        
        foreach($destinations as $destination => $content) 
        {                        
                echo    "<div class='picturesContainer'>
                                {$content['name']} 
                                <div class='destinationImage'>{$content['image']}</div>
                                <div class='descriptionParagraph'>{$content['description']}</div>               
                        </div>";
        }
         
echo "</div>";
