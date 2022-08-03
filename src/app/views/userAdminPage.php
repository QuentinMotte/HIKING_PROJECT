<?php include "app/views/includes/header.php" ?>

<section class="users-container">
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

<?php include 'app/views/includes/footer.php' ?>