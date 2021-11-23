<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles_5.css">
    <title>Add Recipe</title>
</head>
<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><a href="index.php">Logo</a></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <!-- <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label> -->
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="admin.php">Admin</a></li>
            <li><a href="search.php">Search</a></li>
            <li class="services">
              <a href="recipes.php">Recipes</a>
              <!-- DROPDOWN MENU -->
              <!-- <ul class="dropdown">
                <li><a href="/">Breakfast Recipes</a></li>
                <li><a href="/">Lunch Recipes</a></li>
                <li><a href="/">Dinner Recipes</a></li>
                <li><a href="/">Drink Recipes</a></li>
                <li><a href="/">Dessert Recipes</a></li>
              </ul> -->
            </li>
            <!-- <li><a href="/">Weeknight Recipes</a></li> -->
            <!-- <li><a href="/">Recipe Book</a></li> -->
          </div>
        </ul>
    </nav>
    <div class="header">
        <h1>New Recipe</h1>
    </div>
    <div class="main">
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
        <button>Save</button>
    </div>
</body>
</html>