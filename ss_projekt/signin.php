<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require('db.php');
session_start();
// When form submitted, check and create user session.
if (isset($_POST['username'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `user` WHERE $email='$email'
                     AND password='" . md5($password) . "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $email;
        // Redirect to user dashboard page
        //header("Location: dashboard.php");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
    }
} else {
?>


<div id="company_margin">
    <a id='company' href="index.php">
        TODOC
    </a>
</div>
<h1 style="margin-top: 1em;">SIGN IN</h1>
<img id="logo2" src="img/logo.png">
<div id="errorFlex">
    <form action="signinMySql.php" id="signupfeld" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
          method="post">

        <input placeholder='Email' type="text" name="email"
         <?php
         //if (isset($eingabe['mail'])) echo 'value="' . $eingabe['mail'] . '"';
         ?>><br>

        <input placeholder="Password" type="password" name="password"
            <?php
            //if (isset($eingabe['passwort'])) echo 'value="' . $eingabe['passwort'] . '"';
            ?>><br>

        <input type="submit" name="senden" value="Absenden">
        <a style="font-size: 0.9em; color:#33383b" href="createUserMySql.php">Not registered yet?</a>
    </form>
</body>
</html>

<?php
}
?>

