<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title>Remember Me</title>
</head>
<body>

  <div class="container">
    <h1>Remember Me</h1>
    <hr>
    <?php 
    if ($_GET['durum']=="false") {?>
     <div class="alert alert-danger">
      Login Failed 
     </div>
   <?php } else if ($_GET['durum']=="cikis") {?>
    <div class="alert alert-success">
      You have successfully logged out 
    </div>

  <?php } ?>


  <?php 
  if (isset($_SESSION['kadi'])) {?>

   <p>Welcome ! <?php echo $_SESSION['kadi'] ?></p>
   <a href="cikis.php"><button class="btn btn-danger">Logout</button></a>
 <?php } else {?>


  <form action="islem.php" method="POST">
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="kadi" 
      <?php if (isset($_COOKIE['kadi'])) {?>
        value="<?php echo $_COOKIE['kadi'] ?>"
      <?php } else {?>
      <?php } ?>

    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="pass" 
      <?php if (isset($_COOKIE['kadi'])) {?>
        value="<?php echo $_COOKIE['pass'] ?>"
      <?php } else {?>
     <?php } ?>


   </div>

   <div class="form-group form-check">
    <input type="checkbox" <?php echo isset($_COOKIE['kadi']) ? "checked" : "" ?> name="remember_me" class="form-check-input">
    <label class="form-check-label" >Remember Me</label>
  </div>
  <button type="submit" name="user_login" class="btn btn-primary">Login</button>
</form>

<?php }

?>





</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>