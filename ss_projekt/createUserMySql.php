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
  if (isset($_REQUEST['firstname'])) {
    // removes backslashes
    $firstname = stripslashes($_REQUEST['firstname']);
    //escapes special characters in a string
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($conn, $firstname);
    $email = stripslashes($_REQUEST['mail']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['passwort']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "INSERT into `user` (email,firstname,lastname, password)
                 VALUES ('$email', ''$firstname', ''$lastname', '" . md5($password) . "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='signin.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='createUserMySql.php.php'>registration</a> again.</p>
              </div>";
    }
}else{
?>
<div id="company_margin">
    <a  id='company' href="index.php" >
            TODOC
    </a>
</div>
    <h1 style="margin-top: 1em;">SIGN UP</h1>
    <img id="logo2" src="img/logo.png">
    <div id="errorFlex">
        <?php require('db.php') ?>
            <form action="createUserMySql.php" id="signupfeld" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <input placeholder='Firstname' type="text" name="firstname"
                                <?php //if(isset($eingabe['firstname'])) echo 'value="'.$eingabe['firstname'].'"'; ?>><br>

                    <input placeholder='Lastname' type="text" name="lastname"
                                <?php //if(isset($eingabe['nachname'])) echo 'value="'.$eingabe['nachname'].'"'; ?>><br>

                    <input placeholder='Email' type="text" name="mail"
                            <?php // if(isset($eingabe['mail'])) echo 'value="'.$eingabe['mail'].'"'; ?>><br>

                    <input placeholder="Password" type="password" name="passwort"
                                <?php // if(isset($eingabe['passwort']))echo 'value="'.$eingabe['passwort'].'"'; ?>><br>

                    <input placeholder="Re-enter your password" type="password" name="passwort2"
                                <?php //if(isset($eingabe['passwort2']))echo 'value="'.$eingabe['passwort2'].'"'; ?>><br>

                    <input type="submit" name="senden" value="Absenden">
                    <a style="font-size: 0.9em; color:#33383b" href="auth_session.php">Already registered?</a>
            </form>
    </div>
      <?php } ?>
</body>
</html>


