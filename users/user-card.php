<?php
while ($row = mysqli_fetch_assoc($db_results)) { ?>
        <div class="recipe_heads">
            <p>
                <img width="200" src="<?php echo $row['file_path']; ?>" alt="">
            </p>
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
                <h2><?php echo $row['Title']; ?></h2>
            </a>
        </div>
<?php
}
?>