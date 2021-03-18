<?php

include('destinations_data.php');


"<div class='picturesContainer'>";

    foreach($destinations as $destination => $content) 
    {
        echo "<h2 class='picturesTitle'> $destination </h2> " . $content['image'];
    }

"</div>"; 
    