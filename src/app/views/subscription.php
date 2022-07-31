<?php include "app/views/includes/header.php" ?>



<form name="register" action="index.php?action=register" method="post">
    <div>
        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname" required pattern="^[A-Za-z '-]+$">
    </div>
    <div>
        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname" required pattern="^[A-Za-z '-]+$">
    </div>
    <div>
        <label for="nickname">Pseudo :</label>
        <input type="text" name="nickname">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Subscribe</button>
</form>


<?php include 'app/views/includes/footer.php' ?>