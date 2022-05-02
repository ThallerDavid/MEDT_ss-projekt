
<?php 

session_start();
if(!isset($_SESSION["firstname"])){
    header("Location: signin.php");
        exit();
}

    // session_start();

    // //MySQL database information
    // $_db_host = "localhost";
    // $_db_datenbank = "mydb";
    // $_db_username = "web";
    // $_db_passwort = "abcdefgh";

    
    // //open database connection
    // $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

    //  //check connection
    //  if($conn -> connect_error){
    //     die("Connection failed: " . $conn -> connect_error);
    // }


    //  //Check formular data
    // if (!empty($_POST["senden"])) {

    //     //get data from POST
    //     $_email = $conn->real_escape_string($_POST["mail"]);
    //     $_passwort = $conn->real_escape_string($_POST["passwort"]);
    
    //     $_sql = "SELECT * FROM `user` WHERE email='$_email' AND password=md5('$_passwort')";
    //     echo $_sql;
    //     echo "<br>";

    //     if ($_res = $conn->query($_sql)) {
    //         //if 0 entries will be returnden 
    //         if ($_res->num_rows > 0) {
    //             echo "Der Login war erfolgreich.<br>";
    //             $_SESSION["login"] = 1;
        
    //             //save
    //             $_SESSION["user"] = $_res->fetch_assoc();
        
    //             $_sql = "UPDATE email SET last_login=NOW() WHERE id=".$_SESSION["user"]["id"];
            
    //            $conn->query($_sql);

                
    //         } else {
    //             echo "Die Logindaten sind nicht korrekt.<br>";
    //             include("signin.php");
    //             exit;
    //         }
    //         $_res->close();
    //     }
    // }
     
    
    // //close database
    // $conn->close();

    // //if user is not logged in
    // if ($_SESSION["login"] != 1) {
    //     include("signin.php");
    //     exit;
    // }

    // echo "<br>User " . $_SESSION["user"]["username"] . " is logged in since ". $_SESSION["user"]["last_login"] .".<br>";

    // $table = "user";
    // $query = "SELECT * FROM $table";
    // if($result = $conn -> query($query)){
    //     echo "<br>Select returned " . $result -> num_rows . "rows.<br>";

    //     if($result -> num_rows > 0){
    //         // insert records into a html table
    //         echo "<table><tr><th>ID</th><th>User</th><th>Last Login</th></tr>";

    //         //output data for echa row
    //         while($row = $result->fetch_assoc()){
    //             echo "<tr><td>" . $row["id"] . "</td><td>" . $row["user"] . "</td><td>" . 
    //                     $row["last_login"] . "<td></tr>";
    //         }
    //         echo "</table>";
    //     }else{
    //         echo "0 results";
    //     }

    //     $result -> close();
    // }

?>