<?php
    // Create Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if(mysqli_connect_errno()) {
        // connection failed
        echo "Failed to Connect to MYSQL" . mysqli_connect_errno();
    }
?>