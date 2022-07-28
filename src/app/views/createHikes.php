<?php include "app/views/includes/header.php" ?>



<form name="create" action="index.php?action=createhikes" method="post">
    <div>
        <label for="name_hikes">Hike name :</label>
        <input type="text" name="name_hikes" required>
    </div>
    <div>
        <label for="distance">Distance:</label>
        <input type="text" name="distance">
    </div>
    <div>
        <label for="duration">Duration </label>
        <input type="text" name="duration">
    </div>
    <div>
        <label for="elevation_gain">Elevation gain :</label>
        <input type="text" name="elevation_gain">
    </div>
    <div>
        <label for="description">description :</label>
        <textarea type="text" name="description"></textarea>
    </div>
    <div>
        <?php 
        foreach($tags as $tag){
        ?>
        <label for="<?= $tag->name ?>"><?= $tag->name?> :</label>
        <input type="checkbox" name="<?= $tag->name?>"><?php
         } 
         ?>
    </div>
    <button type="submit">Post</button>
</form>


<?php include 'app/views/includes/footer.php' ?>