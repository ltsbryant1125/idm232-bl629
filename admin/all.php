<?php
$page_title = 'All-Recipes';

include_once '../global/header.php';


$sql = 'SELECT id, Title ';
$sql .= 'FROM local_recipes';
$db_results = mysqli_query($con, $sql);


?>

<html>

<body>
    <div class="content">
        <?php

        if ($db_results && $db_results->num_rows > 0) {
            include '../components/card.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
    </div>
</body>
</html>