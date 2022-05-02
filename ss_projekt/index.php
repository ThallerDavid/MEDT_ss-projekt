<?php
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
    echo 'true';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

//echo 'hello' . $user_data['user_name'];


$site = (isset($_GET['site'])) ? $_GET['site'] : "";

if($site === ""){
    $site = "";
}


echo "
		<body id=\"$site\">
	";


echo "
<img id='logo2' src='img/logo.png'>
<div id='company_margin'>
    <a id='company' href=\"index.php?\" >
        TODOC
    </a>
</div>

<div id='nav'>
        <a id='school' href=\"index.php?site=school\">
            SCHOOL
        </a>

        <a id='work' href=\"index.php?site=work\">
            WORK
        </a>

        <a id='shopping' href=\"index.php?site=shopping\">
           SHOPPING
        </a>

        <a id='sport' href=\"index.php?site=sport\">
            SPORT
        </a>

        <a  id='all' href=\"index.php?site=all\">
            ALL
        </a>

        <div id='login'>
            <a  id='signin' href=\"signin.php\">
                SIGN IN
            </a>
            <a id='signup' href=\"createUserMySql.php\">
                SIGN UP
            </a>
        </div>

</div>";

$header = array();
$description = array();
$date = array();
$done = array();
$category = array();

$inputheader = array();
$inputheader[0] = 'Mathe HÜ';
$inputdescription = array();
$inputdescription[0] = '6.27 6.31';
$inputdate = array();
$inputdate[0] = '20.03.22';
$inputdone = array();
$inputdone[0] = false;
$inputcategory = array();



// if($inputcategory[0] === $category[0]){
//     $inputcategory = 'school';
// }


if($site != "index"){
}
switch ($site) {
    case 'school':

        // if category === 'school'
        echo "   
        <div id='content'>
            <h2 style='margin-left: 3%;'>SCHOOL</h2> 
            <div id='todo'>
                <h3>$inputheader[0]</h3>
                <p style='color: #33383b' > $inputdescription[0] </p>
                <p><b>Date:</b> $inputdate[0]</p>
                <input type='checkbox' id='done' name='done'>
                <label for='done'>Done</label>
            </div>

            <div id='todo'>
                <h3>Header</h3>
                <p>Description:</p>
                <p>Date:</p>
                <input type='checkbox' id='done' name='done'>
                <label for='done'>Done</label>
            </div>
        </div>";
        break;

    case 'work':
        # code...
        echo "   
            <div id='content'>
                <h2 style='margin-left: 3%;'>WORK</h2> 
                <div id='todo'>
                    <h3>$inputheader[0]</h3>
                    <p style='color: #33383b' > $inputdescription[0] </p>
                    <p><b>Date:</b> $inputdate[0]</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
    
                <div id='todo'>
                    <h3>Header</h3>
                    <p>Description:</p>
                    <p>Date:</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
            </div>";
        break;

    case 'shopping':
        # code...
        echo "   
            <div id='content'>
                <h2 style='margin-left: 3%;'>SHOPPING</h2> 
                <div id='todo'>
                    <h3>$inputheader[0]</h3>
                    <p style='color: #33383b' > $inputdescription[0] </p>
                    <p><b>Date:</b> $inputdate[0]</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
    
                <div id='todo'>
                    <h3>Header</h3>
                    <p>Description:</p>
                    <p>Date:</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
            </div>";
        break;

    case 'sport':
        # code...
        echo "   
            <div id='content'>
                <h2 style='margin-left: 3%;'>SPORT</h2> 
                <div id='todo'>
                    <h3>$inputheader[0]</h3>
                    <p style='color: #33383b' > $inputdescription[0] </p>
                    <p><b>Date:</b> $inputdate[0]</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
    
                <div id='todo'>
                    <h3>Header</h3>
                    <p>Description:</p>
                    <p>Date:</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
            </div>";
        break;

    case 'all':
        # code...
        echo "   
            <div id='content'>
                <h2 style='margin-left: 3%;'>ALL</h2> 
                <div id='todo'>
                    <h3>$inputheader[0]</h3>
                    <p style='color: #33383b' > $inputdescription[0] </p>
                    <p><b>Date:</b> $inputdate[0]</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
    
                <div id='todo'>
                    <h3>Header</h3>
                    <p>Description:</p>
                    <p>Date:</p>
                    <input type='checkbox' id='done' name='done'>
                    <label for='done'>Done</label>
                </div>
            </div>";
        break;

    // case 'signin':
    //     include 'signin.php';
    //     echo '<div id="register">
    //             <p>Not registered yet?</p>
    //             <a href="signup.php">SIGNUP</a>
    //           </div>';

    //     break;

    // case 'signup':
    //      include 'signup.php';
    //      echo '<div id="register">
    //              <p>Already registered?</p>
    //              <a href="signin.php">SIGNIN</a>
    //             </div>';
    //      break;

    default:
        include 'newtodo.php';
        break;
}

//submit
$category[0] = 'school';
$category[1] = 'work';
$category[2] = 'shopping';
$category[3] = 'sport';
$category[4] = 'all';



?>

<?php
include 'footer.php';
?>


</body>
</html>