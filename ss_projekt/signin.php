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
            <?php if (isset($eingabe['mail'])) echo 'value="' . $eingabe['mail'] . '"'; ?>><br>

        <input placeholder="Password" type="password" name="password"
            <?php if (isset($eingabe['passwort'])) echo 'value="' . $eingabe['passwort'] . '"'; ?>><br>

        <input type="submit" name="senden" value="Absenden">
        <a style="font-size: 0.9em; color:#33383b" href="createUserMySql.php">Not registered yet?</a>
    </form>
</body>
</html>

<?php
require('db.php');
session_start();

if (isset($_POST['senden'])) {
    $eingabe = [];
    $error = [];
}

if (isset($_POST['mail']) && strlen(trim($_POST['mail'])) > 4 && str_contains($_POST['mail'], '@') && !is_numeric($_POST['mail'])) {
    $eingabe['mail'] = htmlspecialchars(trim($_POST['mail']));
} else {
    $error['mail'] = '<li><p>Email</p></li>';
}

if (isset($_POST['passwort']) && strlen(trim($_POST['passwort'])) > 6) {
    $eingabe['passwort'] = htmlspecialchars(trim($_POST['passwort']));
} else {
    $error['passwort'] = '<li><p>Password </p></li>';
}


if (isset($_POST['senden'])) {
    if (empty($error)) {

        echo "<script type='text/javascript'>
            document.getElementById('signupfeld').style='background-color: rgb(red, green, blue, 0)';
            document.getElementById('signupfeld').innerHTML = '<h5>All inputs were okay!</h5> <a href=\"index.php?\">TODOC</a>  </div>';
        </script>";
        exit();

    } else {
        $errors = implode($error);
        echo '<div class="error_output"><h4>Something went wrong:</h4><ul>' . $errors . '</ul></div></div>';
    }
}


?>

