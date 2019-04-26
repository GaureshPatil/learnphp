<?php
    echo date('d') . " - "; // day - number of the day
    echo date('m') . " - "; // Month
    echo date('Y') . " - "; // Year
    echo date('l') . " - "; // Day of the week

    date_default_timezone_set('Asia/Kolkata');
    echo "<br>";
    echo date('Y/m/d');
    echo "<br>";
    echo date('h'); // Hour
    echo "<br>";
    echo date('i'); // Minute
    echo "<br>";
    echo date('s'); // Seconds
    echo "<br>";
?>