<?php
$page_title = 'Recipes';

include_once __DIR__ . '/global/header.php';

$sql = 'SELECT *';
$sql .= 'FROM local_recipes';
$db_results = mysqli_query($con, $sql);

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
$keyword = $_GET['keyword'];
$recipes = search_recipe_with_keyword($keyword);
} else {
// Build Query
$recipes = get_recipes();
}

function search_recipe_with_keyword($keyword)
  {
      global $con;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $sql = 'SELECT * ';
      $sql .= 'FROM local_recipes ';
      $sql .= ' WHERE ';
      $sql .= "Title LIKE '%" . $keyword . "%'";
      $sql .= "OR Category LIKE '%" . $keyword . "%' ";
      $sql .= "OR Category LIKE '%" . $keyword . "%' ";
      $sql .= "OR Notes LIKE '%" . $keyword . "%' ";
      $sql .= "OR Directions LIKE '%" . $keyword . "%'";

      $result = mysqli_query($con, $sql);
      if ($result && $result->num_rows > 0) {
          $db_results = $result;
      } else {
          $db_results = null;
      }
      return $db_results;
  }

function get_recipes()
{
    global $con;
    $sql = 'SELECT * ';
    $sql .= 'FROM local_recipes';
    $result = mysqli_query($con, $sql);

    if ($result && $result->num_rows > 0) {
        $recipes = $result;
    } else {
        $recipes = null;
    }

    return $recipes;
}
?>

<html>

<body>
    <div id="allRecipes">
        <form class="search-form" action="" method="GET">
                <input class="searchTerm" type="text" name="keyword" placeholder="Search Recipes..."
                        value="<?php echo @$_GET['keyword']; ?>">
                <input class="searchButton" type="submit" value="Submit">
        </form>
    </div>
    <div id="allRecipes">
      <div class="content">
         <?php
        // Check if the results returned anything
        if ($recipes) {
            include __DIR__ . '/recipes.php';
        } else {
            echo '<p>There are currently no customers in the database</p>';
        }
        ?>
      </div>
    </div>
</body>

</html>