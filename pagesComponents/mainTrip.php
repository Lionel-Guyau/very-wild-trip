<?php

include('destinations_data.php');

foreach($destinations as $destination => $content) 
{
    echo $destination . '</br>' . $content['image'] . '</br>';
    

};