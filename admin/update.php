<?php
$page_title = 'Update Recipe';
$body_class = 'add-recipe';

include_once '../global/Adminheader.php';

if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('/admin/update.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['recipeNotes']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['recipeDirections']);

    // Build Query
    $sql = 'UPDATE local_recipes SET ';
    $sql .= "Title = '{$title}', ";
    $sql .= "Notes = '{$recipeDetails}', ";
    $sql .= "Ingredients = '{$recipeIngredients}', ";
    $sql .= "Directions = '{$recipeInstructions}' ";
    $sql .= "WHERE id = {$recipe_id}";

    // Execute Query
    $db_results = mysqli_query($con, $sql);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/all.php?success=');
    } else {
        // Error
        redirectTo('/admin/all.php?id=' . $recipe_id . '&error=' . mysqli_error($con));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $sql = 'SELECT * ';
    $sql .= 'FROM local_recipes ';
    $sql .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/all.php?error=' . mysqli_error($con));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/all.php');
}

?>


<div id="category-content">
    <div>
        <h2>Edit Recipe</h2>
        <form method="POST" id="addRecipe" action="" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" id="title" name="recipeTitle" value="<?php echo $user['Title']; ?>">

            <div>
                <label for="notes">Notes:</label>
                <p class="roboto add-recipe-note">Add Note Here
                </p>
                <div>
                    <textarea class="add-text" type="text" id="notesList" name="recipeNotes"><?php echo $user['Notes']; ?></textarea>
                </div>
            </div>
            <div>
                <label for="ingredients">Ingredients:</label>
                <p>Add Ingredients Here</p>
                <div>
                    <textarea class="add-text" type="text" id="ingredientList" name="recipeIngredients"><?php echo $user['Ingredients']; ?></textarea>
                </div>
            </div>

            <div>
                <label for="instructions">Directions:</label>
                <p>Add Directions Here</p>
                <div>
                    <textarea class="add-text" type="text" id="instructionList" name="recipeDirections"><?php echo $user['Directions']; ?></textarea>
                </div>
            </div>
            <input type="hidden" value="<?php echo $user['id']; ?>" name="recipe_id">
            <button type="submit" value="Submit" name="update">Update Recipe</button>
        </form>
    </div>

</div>
