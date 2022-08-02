<?php include "app/views/includes/header.php" ?>

<div class= "profil-container">
    
    <div class="profil-img">
            <img class="avatar" src="img/avatar_profil/avatar_asuma.jpeg" alt="avatar Asuma">

        <p>Qui êtes vous vraiment ?</p>
        <select>
            <option valeur="1">Aventurier foufou</option>
            <option valeur="2">Baladeur paisible</option>
            <option valeur="3">Explorateur intrépide </option>
            <option valeur="4">Autre</option>
        </select>
    </div>      

    <div class="profil-information">
        <p class="denomination">Prénom</p>
        <p class="information"><?= $users[0]->firstname ?></p>
        <?=" <br/>" ?>
        <p class="denomination">Nom</p>
        <p class="information"><?= $users[0]->lastname ?></p>
        <?=" <br/>" ?>
        <p class="denomination">Pseudo</p>
        <p class="information"><?= $users[0]->nickname ?></p>
        <?=" <br/>" ?>
        <p class="denomination">adresse mail</p>
        <p class="information"><?= $users[0]->email ?></p>
    </div>



</div>

<?php 
    if($hikes == []){ ?>
        <div class="my-hikes">
            <p> NO HIKES </p>
        </div>
    <?php } else { 

foreach($hikes as $hike){ ?>
    <div class="container">
        <div class="img-container">
            <img class="img" src="
<?php 
    if($hike->image == null)
    {
        echo "img/logo.png";
    }
    else
    {
        echo $hike->image;
    }
        ?>">
        </div>
    <div class="hike">
        <h3 class="title" ><?= htmlspecialchars($hike->name); ?></h3>
        <p class="description" ><i class="fa-solid fa-person-walking-arrow-right"></i><span> Distance :</span>  <?= $hike->distance; ?></p>
        <p class="description" ><i class="fa-solid fa-clock"></i><span> Temps :</span>  <?= $hike->duration; ?></p>
        <p class="description" ><i class="fa-solid fa-arrow-trend-up"></i><span> Dénivelé : </span> <?= $hike->elevation; ?></p>
        <p class="description" > <i class="fa-solid fa-scroll"></i>   <span> Description : </span> <?= $hike->description; ?></p>
        
        <p class="description" >creation date : <?= $hike->creationDate; ?></p></div>
        
    
</div>

<div class="btnContainer">
        <?php
        if (isset($_SESSION['id_user'])) {
            if ($_SESSION['id_user'] == $_GET['iduser']) {
                echo '<div class="btn-container">';
                echo '<div class="btn" ><a href="index.php?action=editHike&id=' . $hike->id . '">EDIT</a></div>';
                echo '<div class="btn" ><a href="index.php?action=deleteHike&id=' . $hike->id . '">DELETE</a></div>';
                echo '</div>';
            }
        }
        ?>
        </div>
<?php } }?>


<?php include 'app/views/includes/footer.php' ?>