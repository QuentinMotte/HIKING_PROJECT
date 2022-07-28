<?php include "app/views/includes/header.php" ?>

<section class="card-container">

<?php foreach ($hikes as $hike) { ?>

<div class="hikeCard">
    <img class="hikeCard-img" src="img/logo.png">
    <h3 class="hikeCard-title" ><?= htmlspecialchars($hike->name); ?></h3>
    <p class="hikeCard-description" >distance : <?= $hike->distance; ?></p>
    <p class="hikeCard-description" >temps : <?= $hike->duration; ?></p>
    <div class="hikeCard-btn" ><a href="index.php?action=hike&id=<?=$hike->id;?>">VIEW MORE</a></div>
</div>

<?php } ?>

</section>

<?php include 'app/views/includes/footer.php' ?>








