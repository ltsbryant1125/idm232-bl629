<?php

include_once __DIR__ . '/../includes/database.php';
include_once __DIR__ . '/../includes/helper.php';
include_once __DIR__ . '/../config.php';

// Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeNotes = mysqli_real_escape_string($con, $_POST['recipeNotes']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeDirections = mysqli_real_escape_string($con, $_POST['recipeDirections']);

    $files_array = explode('.', $_FILES['image']['name']);
    $file_title = slugify($files_array[0]);
    $extension = end($files_array);
    $final_file_name = $file_title . '.' . $extension;
    $temp_name = $_FILES['image']['tmp_name'];

    $file_path = $app['asset_url'] . $final_file_name;
    $file_destination = __DIR__ . '/../' . $file_path;
    
    
    if(move_uploaded_file($temp_name, $file_destination)) {
    // Build Query
        $sql = "INSERT INTO `local_recipes`(`Title`, `file_path`, `Notes`, `Ingredients`, `Directions`) 
        VALUES ('$title', '$file_path','$recipeNotes','$recipeIngredients','$recipeDirections');";

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    $new_uploaded_file_id = null;
    
        if ($db_results) {
            // Success
            redirectTo('all.php');
        } 
        else {
            // Error
            // echo 'Error';
            redirectTo('all.php?error=' . mysqli_error($con));
        }
    } else {
        //Image Did not move
        redirectTo('all.php?error=Error moving file');
    }
}
?>

// if (isset($POST['submit'])) {
        
        //Parse Data
        $files_name = slugify($_FILES['image']['name']);
        $temp_name = $_FILES['image']['tmp_name'];
        $file_path = $app['asset_url'] . $file_name;
        $file_destination = $SERVER['DOCUMENT_ROOT'] . $file_path;
        
    }