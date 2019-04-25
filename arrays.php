<?php
    #ARRAY - variable that holds multiple value

    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed

    $people = array('gauresh', 'pritesh', 'amar');
    // echo $people[1];
    $ids = array(12, 15, 18);
    // echo "<br>" . $ids[2];
    // echo "<br>" . count($ids);
    // echo "<br>";
    // print_r($ids);
    // var_dump($people);

    // Associative array
    $people = array(
        'gauresh' => 21,
        'pritesh' => 20,
        'amar' => 45
    );
    // echo $people['gauresh'];
    $people['padma'] = 38;
    // echo $people['padma'];

    // Multi-dimensional Array
    $cars = array(
        array('honda', 20, 10),
        array('ford', 30, 15),
        array('toyota', 30, 10),
    );

    echo $cars[1][0];
?>