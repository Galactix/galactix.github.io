<?php
  session_start();
  
  $userinfo = array(
                  'lfuser'=>'wirepass'
                  );
  
  if(isset($_GET['logout'])) {
      $_SESSION['username'] = '';
      header('Location:  ' . $_SERVER['PHP_SELF']);
  }
  
  if(isset($_POST['username'])) {
      if($userinfo[$_POST['username']] == $_POST['password']) {
          $_SESSION['username'] = $_POST['username'];
      }else {
          //Invalid Login
      }
  }
 ?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    
    <?php if($_SESSION['username']): ?>
    success
    <p>You are logged in as <?=$_SESSION['username']?></p>
    <p><a href="?logout=1">Logout</a></p>
    <?php endif; ?>
    
    <form name="login" action="" method="post">
      Username:  <input type="text" name="username" value="" /><br />
      Password:  <input type="password" name="password" value="" /><br />
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>