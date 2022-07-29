<?php

require_once('app/models/login.php');

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', '188.166.24.55');
// define('DB_USERNAME', 'phplovers');
// define('DB_PASSWORD', 'rlTJtf3NUeHKIgGn');
// define('DB_NAME', 'jepsen6-phplovers');

// /* Attempt to connect to MySQL database */
// try {
//     $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
//     // Set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("ERROR: Could not connect. " . $e->getMessage());
// }


// $nickname = $password = "";
// $nickname_err = $password_err = $login_err = "";

// // Processing form data when form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     // Check if nickname is empty
//     if (empty(trim($_POST["nickname"]))) {
//         $nickname_err = "Please enter nickname.";
//     } else {
//         $nickname = trim($_POST["nickname"]);
//     }

//     // Check if password is empty
//     if (empty(trim($_POST["password"]))) {
//         $password_err = "Please enter your password.";
//     } else {
//         $password = trim($_POST["password"]);
//     }

//     // Validate credentials
//     if (empty($nickname_err) && empty($password_err)) {
//         // Prepare a select statement
//         $sql = "SELECT id_user, nickname, password FROM USERS WHERE nickname = :nickname";

//         if ($stmt = $pdo->prepare($sql)) {
//             // Bind variables to the prepared statement as parameters
//             $stmt->bindParam(":nickname", $param_nickname, PDO::PARAM_STR);

//             // Set parameters
//             $param_nickname = trim($_POST["nickname"]);

//             // Attempt to execute the prepared statement
//             if ($stmt->execute()) {
//                 // Check if nickname exists, if yes then verify password
//                 if ($stmt->rowCount() == 1) {
//                     if ($row = $stmt->fetch()) {
//                         $id = $row["id_user"];
//                         $nickname = $row["nickname"];
//                         $hashed_password = $row["password"];
//                         if (password_verify($password, $hashed_password)) {
//                             // Password is correct, so start a new session

//                             session_start();

//                             // Store data in session variables

//                                 $_SESSION["loggedin"] = true;
//                                 $_SESSION["id_user"] = $id;
//                                 $_SESSION["nickname"] = $nickname;



//                             // Redirect user to the homepage.php page with the message "You are now logged in"
//                             header("location: index.php?action=success");
//                         } else {
//                             // Password is not valid, display a generic error message
//                             $login_err = "Invalid nickname or password.";
//                         }
//                     }
//                 } else {
//                     // nickname doesn't exist, display a generic error message
//                     $login_err = "Invalid nickname or password.";
//                 }
//             } else {
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             unset($stmt);
//         }
//     }

//     // Close connection
//     unset($pdo);
// }
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