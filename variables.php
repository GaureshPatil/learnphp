<?php
    // single line comment
    #  SINGLE LINE COMMENT
    /*
        Multiline
        comment
    */

    #VARIABLES
    /*
        - prefix $
        - Start with a letter and underscore
        - only letters, numbers and underscores
        - Case Sensitive
    */

    #DATA TYPES
    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource 
    */

    $num1 = 70;
    $num2 = 8;
    $sum = $num1 + $num2;
    $output = "Hello World!";
    echo $sum . "<br>";
    $st1 = 'Hello';
    $st2 = 'World!';
    $str = $st1 . " " . $st2;
    echo $str;

    define("GREET", "HOLA");
    echo GREET;
?>