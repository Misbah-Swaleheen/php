<?php

    $colors = ['Red', 'Blue', 'Green', 'Purple', 'Black', 'White', 'SkyBlue', 'Navyblue', 'Limegreen', 'Brown','Orange' ];

    $group1 = array_slice($colors, 0, 5);
    $group2 = array_slice($colors, 5, 6);

    var_dump($group1);
    var_dump($group2)
?>