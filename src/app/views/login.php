<?php

$login_err = "Invalid nickname or password.";
$nickname_err = "Please enter nickname.";
$password_err = "Please enter your password.";

?>

<?php include "includes/header.php"; ?>

<div class="wrapper">
    <h2>Login</h2>
    <p>Please fill in to login.</p>

    <?php
    if (!empty($login_err)) {
        echo '<div>' . $login_err . '</div>';
    }
    ?>

    <form action="index.php?action=login" method="post">
        <div>
            <label>nickname</label>
            <input type="text" name="nickname" <?php echo (!empty($nickname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nickname; ?>">
            <span><?php echo $nickname_err; ?></span>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span><?php echo $password_err; ?></span>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
        <p>Don't have an account? <a href="subscription.php">Sign up now</a>.</p>
    </form>
</div>

<?php
include "includes/footer.php";
?>