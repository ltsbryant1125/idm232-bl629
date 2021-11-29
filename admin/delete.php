<?php
$page_title = 'Delete Recipe';
$body_class = 'add-recipe';
include_once '../global/Adminheader.php';

if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE FROM local_recipes WHERE id=$recipe_id") or die($sql->error());

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        // Success
        redirectTo('all.php');
    } else {
        // Error
        redirectTo('all.php?error=' . mysqli_error($con));
    }
}

?>