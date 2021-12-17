<?php
require('connect.php');
function getSafeValue($con, $str)
{
  if ($str != '') {
    $str = trim($str);
    return mysqli_real_escape_string($con, $str);
  }
}
$msg = '';
if (isset($_POST['submit'])) {
  $email = getSafeValue($con, $_POST['email']);
  $password = getSafeValue($con, $_POST['password']);
  $sql = "select * from admin_user where email='$email' and password='$password'";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);
  $count = mysqli_num_rows($res);
  if ($count > 0) {
    $_SESSION['ADMIN_LOGIN'] = 'yes';
    $_SESSION['USER_NAME'] = $row['name'];
    header('location:admin_photo.php');
    die();
  } else {
    $msg = "Invalid Username/Password";
  }
}
?>
<DOCTYPE! html>
  <html>

  <head>
    <meta charset="utf-8">
    <title> LOGIN.... </title>
    <link rel="icon" href="000856-Wolf-head-logo-maker-03.png" type="image/png" />
    <link href="login.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <form class="form" method="POST">

      <h1> LOGIN</h1>
      <input type="email" name="email" class="box" placeholder="Enter Username">
      <input type="password" name="password" class="box" placeholder="Enter Password">
      <?php echo $msg ?>
      <input type="submit" name="submit" value="submit">
      <input type="reset" value="Reset" id="guest">
      <a href="mini.html" id="icon"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="font-size: 24px;padding: 10px 10px;color:white;background-color: #e10000;border-radius: 20px;"></i></a>
    </form>

  </body>

  </html>