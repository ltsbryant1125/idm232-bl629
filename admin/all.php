<?php
$page_title = 'All-Recipes';

include_once __DIR__ . '/../global/Adminheader.php';


$sql = 'SELECT *';
$sql .= 'FROM local_recipes';
$db_results = mysqli_query($con, $sql);


?>

<html>

<body>
    <div id="allRecipes">
        <div class="new">
            <button><a href="add.php">ADD RECIPE</a> </button>
        </div>
    </div>
    <div id="allRecipes">
        <div class="content">
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include '../components/card.php';
            } else {
                echo '<p>There are currently no users in the database</p>';
            }
            ?>
        </div>
    </div> 
</body>
</html>