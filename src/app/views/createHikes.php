<?php include "app/views/includes/header.php" ?>


<section class="createHike-container">
    <form class="formCreateHike" name="create" action="index.php?action=createhikes" method="post">
        <div class="formCreateHike--name">
            <label class="formCreateHike--label" for="name_hikes">Hike name :</label>
            <input class="formCreateHike--input" type="text" name="name_hikes" required>
        </div>
        <div class="formCreateHike--distance">
            <label class="formCreateHike--label" for="distance">Distance:</label>
            <input class="formCreateHike--input" type="text" name="distance">
        </div>
        <div class="formCreateHike--duration">
            <label class="formCreateHike--label" for="duration">Duration </label>
            <input class="formCreateHike--input" type="text" name="duration">
        </div>
        <div class="formCreateHike--elevation">
            <label class="formCreateHike--label" for="elevation_gain">Elevation gain :</label>
            <input class="formCreateHike--input" type="text" name="elevation_gain">
        </div>
        <div class="formCreateHike--description">
            <label class="formCreateHike--label" for="description">description :</label>
            <textarea class="formCreateHike--input formCreateHike--input-textarea" type="text" name="description"></textarea>
        </div>
        <div class="formCreateHike--tags">
            <?php 
            foreach($tags as $tag){
            ?>
            <label class="formCreateHike--label" for="<?= $tag->name ?>"><?= $tag->name?> : </label>
            <input class="formCreateHike--input formCreateHike--input-checkbox" type="checkbox" name="<?= $tag->name?>"><?php
            } 
            ?>
        </div>
        <button class="formCreateHike--subBtn" type="submit">Post</button>
    </form>
</section>


<?php include 'app/views/includes/footer.php' ?>