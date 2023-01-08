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
<form action="register.php" method="post" autocomplete="off">
  <h3 class="text-primary">Registration Form</h3>
   <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Register</button>
</form>
<?php
if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  include('dbconnection.php');
  $date=date("d-m-Y h:i:sa");
  $sql="insert into register (name,email,password,reading_time) values ('$name','$email','$password','$date')";
  if(mysqli_query($con,$sql))
  {
    echo "
    <div class='alert alert-success'>
    <strong>Success:</strong>Registration Successful

    </div>
    "; 

  }
  else
  {
    echo "
    <div class='alert alert-danger'>
    <strong>Success:</strong>Registration Failed
    </div>
    ";

  }

}


?>
</div>
</body>
</html>

