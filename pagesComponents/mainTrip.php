<?php

include('destinations_data.php');




foreach($destinations as $destination => $content) 
{
        echo "<div class='picturesContainer'><h2 class='picturesTitle'> $destination </h2> " .$content['image'] . "</div>";
}

