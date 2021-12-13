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
    <div class="Title">
        <div>
            <h2><?php echo $row['Title']; ?></h2>
        </div>
    </div>
    <div class="Hero">
         <img width="400" src="<?php echo $row['file_path']; ?>" alt="">
    </div>
    <div class="container">
        <div class="Details">
            <div class="recipeNot">
                <h4>Notes</h4>
                <ul>
                    <?php foreach($recipeNotesExplode as $value){
                        echo "<li>$value</li>";}; ?>
                </ul>
            </div>
            <div class="recipeIng">
                <h4>INGREDIENTS</h4>
                <ul>
                    <?php foreach($recipeIngredientsExplode as $value){
                        echo "<li>$value</li>";}; ?>
                </ul>
            </div>
            <div class="recipeIns">
                <h4>INSTRUCTIONS</h4>
                <ul>
                    <?php foreach ($recipeInstructionsExplode as $value) {
            echo "<li>$value</li>";}; ?>
                </ul>
            </div>
        </div>
    </div>
<?php
}
?>