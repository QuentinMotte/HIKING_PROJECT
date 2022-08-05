<?php include "app/views/includes/header.php" ?>

<section class="users-container">
    <h1>List of Users</h1>
<div class="userDB">
    <ul class="title-user">
        <li>Firstname</li>
        <li>Lastname</li>
        <li>Nickname</li>
        <li>Email</li>
        <li>Admin</li>
        <li>Description</li>
    </ul>
    
</div>

<?php foreach ($usersProfil as $userProfil) { ?>

<div class="userDB">
    <ul>
        <li><?=$userProfil->firstname ?></li>
        <li><?=$userProfil->lastname ?></li>
        <li><?=$userProfil->nickname?></li>
        <li><?=$userProfil->email ?></li>
        <li><?=$userProfil->admin ?></li>
        <li><?=$userProfil->userDescription ?></li>
        <a href="index.php?action=deleteUser&nickname=<?=$userProfil->nickname?>">DELETE</a>
    </ul>
    
</div>

<?php } ?>


</section>
<section class="hikesAdmin-container">
    <h1>List of Hikes</h1>
<div class="hikesDB">
    <ul class="title-hikes">
        <li>name hike</li>
        <li>creation date</li>
        <li>distance</li>
        <li>duration</li>
        <li>elevation gain</li>
        <li>Description</li>
    </ul>
    
</div>

<?php foreach ($hikes as $hike) { ?>

<div class="hikesDB">
    <ul>
        <li class="nameHike"><?=$hike->name ?></li>
        <li><?=$hike->creationDate ?></li>
        <li><?=$hike->distance?></li>
        <li><?=$hike->duration ?></li>
        <li><?=$hike->elevation ?></li>
        <li class="descriptionHike"><?=$hike->description ?></li>
        <a href="index.php?action=delete&idHike=<?=$hike->id?>">DELETE</a>
    </ul>
    
</div>

<?php } ?>


</section>

<?php include 'app/views/includes/footer.php' ?>
