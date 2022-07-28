<?php include "app/views/includes/header.php" ?>

<div class="container">
    <div class="img-container">
        <img class="img" src="img/logo.png">
    </div>
    <div class="hike">
        <h3 class="title" ><?= htmlspecialchars($hike->name); ?></h3>
        <p class="description" >distance : <?= $hike->distance; ?></p>
        <p class="description" >temps : <?= $hike->duration; ?></p>
        <p class="description" >dénivelé : <?= $hike->elevation; ?></p>
        <p class="description" >description : <?= $hike->description; ?></p>
        <p class="description" >creation date : <?= $hike->creationDate; ?></p>
    </div>
</div>

<?php include 'app/views/includes/footer.php' ?>


