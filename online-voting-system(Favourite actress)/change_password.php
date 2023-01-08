<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change password</title>
</head>
<body>
  <?php
  include('userheader.php');

  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
<form action="change_password.php" method="post" autocomplete="off">
  <h3 class="text-primary">Change Your Password</h3>
  <div class="form-group">
    <label for="pwd">New password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update password</button>
</form>
<?php
if(isset($_POST["submit"]))
{
  $password=$_POST["password"];
  include('dbconnection.php');
  $email=$_SESSION["email"];
  $sql="update register set password='$password' where email='$email'";
  
  if(mysqli_query($con,$sql))
  {
  echo "<p style='color:green;'>password updated successfully</p>";

  }
  else
  {
    echo "<p style='color:red;'>password updation error</p>";

  }

}


?>
  </div>
 </div>
</div>
</body>
</html>

