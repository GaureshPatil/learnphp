<?php
    # FUNCTION - block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction() - Usually used for classes
    */

    // create simple function
    function simpleFunction() {
        echo "hello World!";
    }
    // run simple function / call simple function wherever required
    simpleFunction();

    // function with params
    function sayHello($name) {
        echo "Hello $name<br>";
    }

    sayHello('Gauresh');
?>