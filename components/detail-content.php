<?php
$recipe_id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM local_recipes WHERE id='$recipe_id'");

while ($row = mysqli_fetch_assoc($sql)) {
    $recipeIngredients = $row['Ingredients'];
    $recipeInstructions = $row['Directions'];
    $recipeNotes = $row['Notes'];
    $recipeNotesExplode= explode("|", htmlspecialchars_decode($row['Notes']));
    $recipeIngredientsExplode = explode("|", htmlspecialchars_decode($row['Ingredients']));
    $recipeInstructionsExplode = explode("|", htmlspecialchars_decode($row['Directions']));
?>
    <div>
        <div>
            <h2><?php echo $row['Title']; ?></h2>
        </div>
    </div>
    <div>
        <div>
            <h4>Notes</h4>
            <ul>
                <?php foreach($recipeNotesExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div>
            <h4>INGREDIENTS</h4>
            <ul>
                <?php foreach($recipeIngredientsExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div>
            <h4>INSTRUCTIONS</h4>
            <ul>
                <?php foreach ($recipeInstructionsExplode as $value) {
        echo "<li>$value</li>";}; ?>
            </ul>
        </div>
    </div>
<?php
}
?>