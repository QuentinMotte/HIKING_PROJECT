<?php include "app/views/includes/header.php" ?>


<section class="createHike-container">
    <form class="formCreateHike" name="create" action="index.php?action=editHike&id=<?= $hike->id ?>" method="post">
        <div class="formCreateHike--name">
            <label class="formCreateHike--label" for="name_hikes">Hike name :</label>
            <input class="formCreateHike--input" type="text" name="name_hikes" required>
        </div>
        <div class="formCreateHike--distance">
            <label class="formCreateHike--label" for="distance">Distance:</label>
            <input class="formCreateHike--input" type="number" name="distance">
        </div>
        <div class="formCreateHike--duration">
            <label class="formCreateHike--label" for="duration">Duration </label>
            <input class="formCreateHike--input" type="number" name="duration">
        </div>
        <div class="formCreateHike--elevation">
            <label class="formCreateHike--label" for="elevation_gain">Elevation gain :</label>
            <input class="formCreateHike--input" type="number" name="elevation_gain">
        </div>
        <div class="formCreateHike--description">
            <label class="formCreateHike--label" for="description">description :</label>
            <textarea class="formCreateHike--input formCreateHike--input-textarea" type="text" name="description"></textarea>
        </div>
        <div class="formCreateHike--tags">

            <?php
            for ($i = 0; $i <= 4; $i++) {
                echo '<label class="formCreateHike--label" for="' . $tags[$i]->name . '">' . $tags[$i]->name . ' : </label>';
                echo '<input class="formCreateHike--input formCreateHike--input-checkbox" id="' . $tags[$i]->name . '" type="radio" name="tagDifficulty" value="' . $tags[$i]->id . '">';
            }
            ?>
            <?php
            for ($i = 5; $i < count($tags); $i++) {
                echo '<label class="formCreateHike--label" for="' . $tags[$i]->name . '">' . $tags[$i]->name . ' : </label>';
                echo '<input class="formCreateHike--input formCreateHike--input-checkbox" id="' . $tags[$i]->name . '" type="checkbox" name="tag[]" value="' . $tags[$i]->id . '">';
            }
            ?>

        </div>
        <button class="formCreateHike--subBtn" type="submit">Update</button>
    </form>
</section>


<?php include 'app/views/includes/footer.php' ?>