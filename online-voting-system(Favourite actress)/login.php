<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <?php
  include('header.php');

  ?>
  <div class="container">
<form action="login.php" method="post" autocomplete="off">
  <h3 class="text-primary">Login Form</h3>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
</form>
<?php
if(isset($_POST["submit"]))
{
 
  $email=$_POST["email"];
  $password=$_POST["password"];
  include('dbconnection.php');
  $sql="select * from register where email='$email' and password='$password'";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $_SESSION["email"]=$email;
    header("Location:vote.php");

  }
  else
  {
    echo "
    <div class='alert alert-danger'>
    <strong>Alert:</strong>Login Failed...

    </div>
    ";

  }

}


?>
</div>
</body>
</html>

