<?php

include_once '../includes/database.php';
include_once '../includes/helper.php';

// Form has been submitted
if (isset($_POST['submit'])) {

    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeNotes = mysqli_real_escape_string($con, $_POST['recipeNotes']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeDirections = mysqli_real_escape_string($con, $_POST['recipeDirections']);


    // Build Query
    $sql = "INSERT INTO `local_recipes`(`Title`, `Notes`, `Ingredients`, `Directions`) 
    VALUES ('$title','$recipeNotes','$recipeIngredients','$recipeDirections');";

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        // Success
        redirectTo('all.php');
    } 
    else {
        // Error
        // echo 'Error';
        redirectTo('all.php?error=' . mysqli_error($con));
    }
}
?>
