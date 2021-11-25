<?php
    $page_title = 'Add';
    $body_class = 'add-recipe';

    include_once '../global/header.php';
?>

<html>
<body>
    <div class="header">
        <h1>New Recipe</h1>
    </div>
    <form method="POST" id="addRecipe" action="create.php" enctype="multipart/form-data">
        <label for="Title">Title:</label>
        <input type="text" id="title" name="recipeTitle">
        <div>
            <label for="notes">Notes</label>
            <textarea name="recipeNotes" id="recipeNotes" class="add-text"></textarea>
        </div>
        <div>
                <label for="ingredients">Ingredients:</label>
                <p>Use the</p>
                <div>
                    <textarea class="add-text" name="recipeIngredients" id="ingredientList" placeholder="Ingredient 1"></textarea>
                </div>
        </div>
        <div>
            <label for="directions">Directions:</label>
            <p>Use the</p>
            <div>
                <textarea class="add-text" name="recipeDirections" id="directionList" placeholder="Step 1"></textarea>
            </div>
        </div>
        <button type="submit" value="Submit" name="submit">Submit</button>
    </form>
    <!-- <div class="main">
        <div class="homeimg1">
            <img class="custom" src="images/InsertImageHere.png" alt="Add Image header">
        </div>
        <div class="text1">
            <h2>Recipe Name</h2>
            <input type="text">
        </div>
        <div class="text2">
            <h2>Servings</h2>
            <input type="text">
        </div>
        <div class="text3">
            <h2>Difficulty</h2>
            <input type="text">
        </div>
        <div class="text4">
            <h2>Prep</h2>
            <input type="text">
        </div>
        <div class="text5">
            <h2>Total</h2>
            <input type="text">
        </div>
        <div class="text6">
            <h2>Ingredients</h2>
            <input type="text">
        </div>
        <div class="text7">
            <h2>Directions</h2>
            <input type="text">
        </div>
    </div>
    <div class="foot">
        <button>Submit</button>
    </div> -->
    </body>
</html>