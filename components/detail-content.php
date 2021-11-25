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
    <div class="detail-top">
        <div id="text-side">
            <h2 class="elsie"><?php echo $row['Title']; ?></h2>
            <!-- <h3 class="roboto">~25 MINS</h3> -->
        </div>
    </div>
    <div class="detail-content">
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">Notes</h4>
            <ul class="detail-list roboto">
                <?php foreach($recipeNotesExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INGREDIENTS</h4>
            <ul class="detail-list roboto">
                <?php foreach($recipeIngredientsExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INSTRUCTIONS</h4>
            <ol class="detail-list roboto">
                <?php foreach ($recipeInstructionsExplode as $value) {
        echo "<li>$value</li>";}; ?>
            </ol>
        </div>
    </div>
<?php
}
?>