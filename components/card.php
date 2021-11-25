<?php
while ($row = mysqli_fetch_assoc($db_results)) { ?>
     <div class="master-recipe-card roboto">
        <div class=" master-recipe-card-text">
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
                <h4 class="master-recipe-title"><?php echo $row['Title']; ?></h4>
            </a>
            <div>
                <div>
                    <a href="../admin/update.php?id=<?php echo $row['id']; ?>">
                        <p>Edit</p>
                    </a>
                </div>
                <div>
                    <a href="../admin/delete.php?id=<?php echo $row['id']; ?>">
                        <p>Delete</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>