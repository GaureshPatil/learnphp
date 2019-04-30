<?php 
    require('config/config.php');
    require('config/db.php');

     // Check for Submit
    if (isset($_POST['delete'])) {
        // echo "submitted";
        // get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']); 

        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if (mysqli_query($conn, $query)) {
            header('Location: ' . ROOT_URL . '');
        } else {
            echo "ERROR: " . mysqli_error($conn);
        }
    }

    // Get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // create query
    $query = "SELECT * FROM posts WHERE id = " . $id;

    // Get the result   
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

?>

<?php include("inc/header.php"); ?>
    <div class="container">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created On <?php echo $post['created_at']; ?> By 
        <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>

        <hr>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Edit</a>
    </div>
<?php include("inc/footer.php"); ?>