<?php include "app/views/includes/header.php" ?>



<form name="register" action="index.php?action=register" method="post">
    <div>
        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname">
    </div>
    <div>
        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname">
    </div>
    <div>
        <label for="nickname">Pseudo :</label>
        <input type="text" name="nickname">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Subscribe</button>
</form>


<?php include 'app/views/includes/footer.php' ?>