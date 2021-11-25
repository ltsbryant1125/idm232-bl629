<?php
$page_title = 'Update Recipe';
$body_class = 'add-recipe';

include_once '../global/header.php';


if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('/admin/update.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['Title']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['Notes']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['Ingredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['Directions']);

    // Build Query
    $sql = 'UPDATE local_recipes SET ';
    $sql .= "Title = '{$title}', ";
    $sql .= "Notes = '{$recipeDetails}', ";
    $sql .= "Ingredients = '{$recipeIngredients}', ";
    $sql .= "Directions = '{$recipeInstructions}', ";
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


<div class="hp-content hp-content-secondary" id="category-content">
    <div>
        <h2 class="secondary-title roboto">Edit Recipe</h2>
        <form method="POST" id="addRecipe" action="" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" id="title" name="recipeTitle" value="<?php echo $user['Title']; ?>">

            <div>
                <label for="notes">Notes:</label>
                <p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new note
                </p>
                <div>
                    <textarea class="add-text" type="text" id="notesList"><?php echo $user['Notes']; ?></textarea>
                </div>
            </div>
            <div class="field_wrapper wrapper-style">
                <label for="ingredients">Ingredients:</label>
                <p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new ingredient</p>
                <div>
                    <textarea class="add-text" type="text" id="ingredientList" name="recipeIngredients"><?php echo $user['Ingredients']; ?></textarea>
                </div>
            </div>

            <div class="field_wrapper2 wrapper-style">
                <label for="instructions">Instructions:</label>
                <p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new instruction</p>
                <div>
                    <textarea class="add-text" type="text" id="instructionList" name="recipeInstructions"><?php echo $user['Directions']; ?></textarea>
                </div>
            </div>
            <input type="hidden" value="<?php echo $user['id']; ?>" name="recipe_id">
            <button type="submit" value="Submit" name="update">Update Recipe</button>
        </form>
    </div>

</div>
