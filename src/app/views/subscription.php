<?php include "app/views/includes/header.php" ?>

<div class="subContainer">

    <h1 class="subTitle">Subscribe and post your first hike !</h1>

    <form class="subForm" name="register" action="index.php?action=register" method="post">
        
        <div class="subForm_name">
            <label for="firstname">Firstname :</label>
            <input type="text" name="firstname" required pattern="^[A-Za-z '-]+$">
        </div>

        <div class="subForm_lastname">
            <label for="lastname">Lastname :</label>
            <input type="text" name="lastname" required pattern="^[A-Za-z '-]+$">
        </div>

        <div class="subForm_nickname">
            <label for="nickname">Pseudo :</label>
            <input type="text" required name="nickname">
        </div>

        <div class="subForm_email">
            <label for="email">Email :</label>
            <input type="email" name="email" required>
        </div>

        <div class="subForm_password">
            <label for="password">Password :</label>
            <input type="password" required name="password">
        </div>
        <button class="subForm_btn" type="submit">Subscribe</button>

    </form>

</div>
<!-- <div class="avatar">

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 1">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
  </label>

  <label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

<label>
  <input type="radio" name="test">
  <img src="https://i.postimg.cc/V6NSPKNc/bin-chilling.jpg" alt="Option 2">
</label>

</div> -->

<?php include 'app/views/includes/footer.php' ?>