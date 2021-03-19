<?php

include('destinations_data.php');


echo "<div class ='tripPage'>";

foreach($destinations as $destination => $content) 
{
        echo "<div class='picturesContainer'><h2> $destination </h2> " .$content['image'] . "</div>";
}

echo "<?div>";
