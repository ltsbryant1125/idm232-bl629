<?php
$page_title = 'Home';

include_once __DIR__ . 'global/header.php';

?>

<html>

<body>
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