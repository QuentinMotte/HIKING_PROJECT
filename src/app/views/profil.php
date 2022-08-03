<?php include "app/views/includes/header.php" ?>

<div class= "profil-container">
    
    <div class="profil-img">
            <a href=""><img class="avatar" src="<?= $users[0]->avatar ?>" alt="avatar Asuma"></a>

        <p>Qui êtes vous vreumeeeeeent ? (Nico trouveras-tu cet EasterEgg ?)</p>

        <p class="information"><?= $users[0]->userDescription ?></p>

    </div>      

    <div class="profil-information">
        <p class="denomination prenom">Prénom</p>
        <p class="information prenom"><?= $users[0]->firstname ?></p>
        <?=" <br/>" ?>
        <p class="denomination nom">Nom</p>
        <p class="information nom"><?= $users[0]->lastname ?></p>
        <?=" <br/>" ?>
        <p class="denomination pseudo">Pseudo</p>
        <p class="information pseudo"><?= $users[0]->nickname ?></p>
        <?=" <br/>" ?>
        <p class="denomination mail">adresse mail</p>
        <p class="information mail"><?= $users[0]->email ?></p>
    </div>



</div>

<?php 
    if($hikes == []){ ?>
        <div class="my-hikes">
            <p> NO HIKES </p>
        </div>
    <?php } else { 

foreach($hikes as $hike){ ?>
    <div class="container-p">
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
?>          ">
        </div>
    <div class="hike">
    <div class="btnContainer-p">
        <?php
        if (isset($_SESSION['id_user'])) {
            if ($_SESSION['id_user'] == $_GET['iduser']) {
                echo '<div class="btn-container">';
                echo '<a href="index.php?action=editHike&id=' . $hike->id . '"><div class="btn edit" ></div></a>';
                echo '<a href="index.php?action=deleteHike&id=' . $hike->id . '"><div class="btn delete" ></div></a>';
                echo '</div>';
            }
        }
        ?>
        </div>
        <h3 class="title" ><?= htmlspecialchars($hike->name); ?></h3>
        <p class="description" ><i class="fa-solid fa-person-walking-arrow-right"></i><span> Distance :</span>  <?= $hike->distance; ?></p>
        <p class="description" ><i class="fa-solid fa-clock"></i><span> Temps :</span>  <?= $hike->duration; ?></p>
        <p class="description" ><i class="fa-solid fa-arrow-trend-up"></i><span> Dénivelé : </span> <?= $hike->elevation; ?></p>
        <p class="description" > <i class="fa-solid fa-scroll"></i>   <span> Description : </span> <?= $hike->description; ?></p>
        
        <p class="description" >creation date : <?= $hike->creationDate; ?></p></div>
        
    
</div>


<?php } }?>


<?php include 'app/views/includes/footer.php' ?>