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

    // Return Value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(4,5);

    // By Reference 
    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";
?>