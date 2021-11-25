<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_1.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Recipes</title>
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
    <div class="head">
      <div class="type">
          <label for="Recipes">Filters:</label>
          <select id="Recipes" name="Recipes">
            <option value="type">Types</option>
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <option value="desserts">Desserts</option>
            <option value="drinks">Drinks</option>
          </select>
        </form>
      </div>
      <div class="diets">
        <select id="Recipes" name="Recipes">
          <option value="diets">Diets</option>
          <option value="vegetarian">Vegetarian</option>
          <option value="vegan">Vegan</option>
          <option value="paleo">Paleo</option>
          <option value="keto">Keto</option>
          <option value="pescetarian">Pescetarian</option>
        </select>
      </div>
      <div class="time">
        <select id="Recipes" name="Recipes">
          <option value="time">Time</option>
          <option value="fivebelow">&lt 5 min</option>
          <option value="fivetotwenty">5-20 min</option>
          <option value="thirtytosixty">30-60 min</option>
          <option value="hourplus">1-2 hours</option>
          <option value="longhours">2+ hours</option>
        </select>
      </div>
      <div class="more">
        <select name="Recipes" id="Recipes">
          <option value="more">More</option>
        </select>
      </div>
    </div>
    <div class="main">
      <div class="homeimg1">
        <a href="details.php"><img class="food" src="images/burger.png" alt="Burger"></a>
      </div>
      <div class="homeimg2">
        <img class="food" src="images/pizza.jpeg" alt="Pizza">
      </div>
      <div class="homeimg3">
        <img class="food" src="images/pasta.jpg" alt="Pasta">
      </div>
      <div class="homeimg4">
        <img class="food" src="images/Martini.jpeg" alt="Martini">
      </div>
      <div class="homeimg5">
        <img class="food" src="images/chocolate.jpeg" alt="Chocolate lasagna" >
      </div>
      <div class="homeimg6">
        <img class="food" src="images/steak.jpeg" alt="Steak">
      </div>
    </div>
</body>
</html>