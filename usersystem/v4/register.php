<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedin()){

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) &&
       isset($_POST['firstname']) && isset($_POST['surname'])){
              $username = $_POST['username'];
              $password = $_POST['password'];
              $password_again = $_POST['password_again'];
              $firstname = $_POST['firstname'];
              $surname = $_POST['surname'];

       if(!empty($username) && !empty($password) && !empty($password_again) &&
          !empty($firstname) && !empty($surname)){

              if(strlen($username)<=30 && strlen($firstname)<=40
                 && strlen($surname)<=40){

                      if($password != $password_again){
                           echo 'Passwords do not match';
                      }else{
                          $md5 = md5($password);
                          $query = "SELECT username FROM users2 WHERE username='".mysql_real_escape_string($username)."'";
                          $query_run = mysql_query($query);
                          if(mysql_num_rows($query_run) == 1){
                              echo 'The username: "'.$username.'" already exists please choose another one.';
                          }else{
                              $query ="INSERT INTO users2
                              VALUES('','".mysql_real_escape_string($username)."','".$md5."',
                              '".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";

                              if($query_run = mysql_query($query)){
                                  $query2 ="SELECT id FROM users2 WHERE username='".mysql_real_escape_string($username)."'";
                                  $query_run2 = mysql_query($query2);
                                  $user_id = mysql_result($query_run2,0,'id');
                                  $_SESSION['user_id'] = $user_id;
                                  header('Location: index1.php');

                              }else{
                                  echo 'Could not register the user, try again';
                              }
                          }
                      }

              }else{
                  echo 'Maxlength of field(s) exceeded';
              }

          }else{
              echo 'Fill the form';
          }
    }
?>

<form action="register.php" method="POST">
    Username:<br> <input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;}?>"/><br>
    Password:<br> <input type="password" name="password" /><br>
    Confirm Password:<br> <input type="password" name="password_again" /><br>
    Firstname:<br> <input type="text" name="firstname" maxlength="40" value="<?php if(isset($firstname)){echo $firstname;}?>"/><br>
    Surname: <br> <input type="text" name="surname" maxlength="40" value="<?php if(isset($surname)){echo $surname;}?>"/><br>
    <br><input type="submit" value="Register" /><br><br>
    <a href="index1.php">Back to Main Page</a>
</form>

<?php
}else if(loggedin()){
    echo 'You are already registered and logged in';
    echo "<br><br><a href='index1.php'>Back to Main Page</a>";
}
?>
