<?php

  //MySQL database information
  $_db_host = "localhost";
  $_db_datenbank = "mydb";
  $_db_username = "web";
  $_db_passwort = "abcdefgh";

  $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

  if (isset($_REQUEST['firstname'])) {
    // removes backslashes
    $_firstname = stripslashes($_REQUEST['firstname']);
    //escapes special characters in a string
    $_firstname = mysqli_real_escape_string($con, $_firstname);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (firstname, password, email, create_datetime)
                 VALUES ('$firstname', '" . md5($password) . "', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
    }
} 

// session_start();

//   //MySQL database information
//   $_db_host = "localhost";
//   $_db_datenbank = "mydb";
//   $_db_username = "web";
//   $_db_passwort = "abcdefgh";

// $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

// if ($conn->connect_error) {
//     echo "error";
//     die("Connection failed: " . $conn->connect_error);
// }
// //echo "Connection successfully";


// $sql = "SELECT * FROM `user`";
// $result = $conn->query($sql);
// $lastId = $result->num_rows;


// if (!empty($_POST["submit"])) {
//     $_firstname = $conn->real_escape_string($_POST["firstname"]);
//     $_passwort = $conn->real_escape_string($_POST["passwort"]);
//     if (strcmp($_passwort, $conn->real_escape_string($_POST["passwort2"])) != 0) {
//         include("signup.php");
//         exit;
//     }
    
//     $_time = date_create('now')->format('Y-m-d H:i:s');
//     //echo $_time;
//     $_id = $lastId+1;

//     //$insertStatement = "INSERT INTO login_username (id, username, password, user_deleted, last_login) VALUES ($_id,'$_username', '$_passwort',0,'$_time');";
//     $insertStatement = "INSERT INTO user (email, firstname, lastname, password, userId, last_login) VALUES ($_id,'$_username', md5('$_passwort'),0,NOW());";
//     //echo $insertStatement;
//     if ($_res = $conn->query($insertStatement)) {
//         echo "<br>User $_username has been added to the database.<br>Try to log in.";
//         include("signin.php");
//     } else {
//         echo "<br>NO insertion. User could not be added. Maybe user $_username already exists.";
//         include("signup.php");
//     }
// } else {
//     include("signup.php");
// }

// $conn->close();

// 

?>