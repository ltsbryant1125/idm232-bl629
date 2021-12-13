<?php
    $page_title = 'Add';
    $body_class = 'add-recipe';

    include_once __DIR__ . '/../global/Adminheader.php';

    // var_dump(__DIR__ . '../global/Adminheader.php');

?>

<html>
<body>
    <div class="header">
        <h1>New Recipe</h1>
    </div>
    <form method="POST" id="addRecipe" action="create.php" enctype="multipart/form-data">
        <div>
        <label for="Title">Title:</label>
        <input type="text" id="title" name="recipeTitle">
        <div>
            <label for="image">Image:</label>
            <input type="file" value="" name="image">
        </div>
        <div>
            <label for="categories">Category:</label>
            <textarea name="recipeCategory" id="recipeCat"></textarea>
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea name="recipeNotes" id="recipeNotes" class="add-text"></textarea>
        </div>
        <div>
                <label for="ingredients">Ingredients:</label>
                <p>Add Ingredients Here</p>
                <div>
                    <textarea class="add-text" name="recipeIngredients" id="ingredientList" placeholder="Ingredient 1"></textarea>
                </div>
        </div>
        <div>
            <label for="directions">Directions:</label>
            <p>Add Instructions Here</p>
            <div>
                <textarea class="add-text" name="recipeDirections" id="directionList" placeholder="Step 1"></textarea>
            </div>
        </div>
        <button type="submit" value="Submit" name="submit">Submit</button>
    </form>
    </body>
</html>