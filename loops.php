<?php
    #LOOPS - execute code set number of times

    /*
        For
        While
        Do..While
        Foreach
    */

    # For Loop
    # @params - init, condiiton, inc

    for ($i = 0; $i < 10; $i++) {
        // echo $i . "<br>";
    }

    # While Loop
    # @params - condition

    $i = 0;
    while($i < 10) {
        // echo $i;
        // echo '<br>';
        $i++;
    }

    # Do...While 
    # @params - condition

    $i = 0;
    do {
        // echo $i;
        // echo '<br>';
        $i++;
    } while ($i < 10);


    # Foreach - arrays
    $people = array('gauresh' => 'gauresh@gmail.com', 'pritesh' => 'pritesh@gmail.com', 'amar' => 'amar@gmail.com');
    foreach($people as $users => $emails) {
        echo $users . " : " . $emails;
        echo "<br>";
    }
?>