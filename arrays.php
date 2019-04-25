<?php
    #ARRAY - variable that holds multiple value

    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed

    $people = array('gauresh', 'pritesh', 'amar');
    echo $people[1];
    $ids = array(12, 15, 18);
    echo "<br>" . $ids[2];
    echo "<br>" . count($ids);
    echo "<br>";
    print_r($ids);

?>