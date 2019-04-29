<?php
    // check for posted data
    /*if (filter_has_var(INPUT_POST, 'data')) {
        echo "Data Found";
    } else {
        echo "No data Found!!";
    } */

    if(filter_has_var(INPUT_POST, 'data')) {
        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo "email is valid";
        } else {
            echo "invalid Email";
        }
    }

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>