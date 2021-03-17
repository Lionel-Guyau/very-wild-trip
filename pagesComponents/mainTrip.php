<?php

$destinationPictures = [
    'London',
    'Berlin',
    'Barcelona',
    'Lisboa',
    'Paris',
    'Toulouse',
    'Dublin',
    'Tokyo',
    'Pekin',
    'Sydney',
    'Moscov',
    'Tarkov',
    'Rio',
    'Los Angeles',
    'Cuba',
    'Roma',
    'Bruxelle',
    'Rabat',
    'Johannesburg',
    'Le Caire',
    'Ouagadougou',
    'Bangkok',
    'Pyongyang',
    'Seoul'
];
?>

<h1 class="tripTitle"> Our destination !!!</h1>
<div class='picturesContainer'>

    <?php
        foreach($destinationPictures as $destinationPicture) 
        {
            echo "<img src='https://picsum.photos/200/300'>";
        }
    ?>