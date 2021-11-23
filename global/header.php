<?php

include 'includes/database.php';

?>

<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
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