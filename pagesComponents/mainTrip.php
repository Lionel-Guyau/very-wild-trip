<?php

include('destinations_data.php');


echo "<div class ='tripPage'>";

foreach($destinations as $destination => $content) 
{
echo "<div class='picturesContainer'>
         <h2> $destination </h2> " .    
                "<div class='destinationImage'>" .
                        $content['image'] . 
                "</div>
                <div class='descriptionParagraph'>" . 
                        $content['description'] . 
                "</div>                
        </div>";                    
}

echo "<?div>";
