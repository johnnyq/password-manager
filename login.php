<?php include("config.php"); ?>
<?php include("functions.php"); ?>

<?php

session_start();

if(isset($_POST['login'])){
  
  $username = mysqli_real_escape_string($mysqli,$_POST['username']);
  $plain_password = $_POST['password'];
  $password = md5($_POST['password']);

  $sql = mysqli_query($mysqli,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
  
  if(mysqli_num_rows($sql) == 1){
    $row = mysqli_fetch_array($sql);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $plain_password;
    $_SESSION['logged'] = TRUE;  
         
    header("Location: logins.php");
  
  }else{

    $response = "
      <div class='alert alert-danger'>
        Incorrect username or password.
        <button class='close' data-dismiss='alert'>&times;</button>
      </div>
    ";
  
  }

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Manager | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  </head>
  <body class="hold-transition login-page">
  <div class="login-box">
    
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><?php if(isset($response)) { echo $response; } ?></p>
        <form method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          
          <button type="submit" class="btn btn-dark btn-block mb-3" name="login">Sign In</button>
        
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- Prevents resubmit on refresh or back -->
  <script>
  
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }

  </script>

  </body>
</html>
