<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="errorFlex">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <input type='text' name='header' placeholder='Title'><br>
                <?php if(isset($input['header'])) echo 'value="'.$input['header'].'"'; ?>

                <input type='text' name='description' placeholder="Description"><br>
                <?php if(isset($input['description'])) echo 'value="'.$input['description'].'"'; ?>

                <!-- echo 'Jetzt ist es ' . date('r'); -->
                <?php $now = date('r')?>
                <input type='date' min='2022-03-06' name="date"><br>
                <?php if(isset($input['date'])) echo 'value="'.$input['date'].'"'; ?>

                <select name='category'>
                <option value=''></option>
                    <option value='school'>School</option>
                    <option value='work'>Work</option>
                    <option value='shopping'>Shopping</option>
                    <option value='sport'>Sport</option>
                </select>  <br>      
                <?php if(isset($input['category'])) echo 'value="'.$input['category'].'"'; ?>


                <input type='submit' name='senden' value='SUBMIT'>

            </form>

            
            <?php 
                    $counter = 0;

                  if(isset($_POST['senden'])){ 
                    $input = [];
                    $error = [];
                    }
            
                    if(isset($_POST['header']) && !empty($_POST['header'])){
                        $input['header'] = htmlspecialchars(trim($_POST['header']));
                        $inputs['header'][$counter] = htmlspecialchars(trim($_POST['header']));

                    }else{
                        $error['header'] = '<li><p>Please add a title</p></li>';
                    }

                    // you dont need a description
                    if(isset($_POST['description']) && !empty($_POST['description'])){
                        $input['description'] = htmlspecialchars(trim($_POST['description']));
                        $inputs['description'][$counter] = htmlspecialchars(trim($_POST['description']));
                    }

                    if(isset($_POST['date']) && !empty($_POST['date'])){
                        $input['date'] = htmlspecialchars(trim($_POST['date']));
                        $inputs['date'][$counter] = htmlspecialchars(trim($_POST['date']));
                    }else{
                        $error['date'] = '<li><p>Please add a date</p></li>';
                    }

                    if(isset($_POST['category']) && !empty($_POST['category'])){
                        $input['category'] = htmlspecialchars(trim($_POST['category']));
                        $inputs['category'][$counter] = htmlspecialchars(trim($_POST['category']));
                    }else{
                        $error['category'] = '<li><p>Please add a category</p></li>';
                    }
            
                    if(isset($_POST['senden'])){
                        if(empty($error)){
                            echo '<div class="error_output"><h4 id="addTodo">You add a new Todo!</h4>';
                            echo '<h3>' . $inputs['header'][$counter] . '</h3>' ;
                           if(!empty($_POST['description'])){
                               echo '<p>' . $inputs['description'][$counter] . '</p>' ;
                            } 
                            echo '<p>' . $inputs['date'][$counter] . '</p>';
                            echo '<p>' . $inputs['category'][$counter] . '</p>';
                            echo '</div>';
                            $counter++;
                            // echo $input['header'];
                         exit();
                
                         }else{
                             $errors = implode($error); //fügt alle error zusammen
                             echo'<div class="error_output"><h4>Something went wrong: </h4><ul>' . $errors . '</ul></div>';
                         }
                    }

                echo'</div>';

            ?>

</body>
</html>