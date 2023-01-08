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
  include('dbconnection.php');
  $email=$_SESSION["email"];
  $sql="select name from register where email='$email'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $sql2="select votes from vote where name='$name'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $votes=$row2['votes'];


  ?>
  <div class="container">
  
      <h5 class="text-primary">Welcome <?php echo $row['name']; ?></h5>
      <h6>You are voted : <strong><?php echo $votes; ?></strong></h6>

      

 </div>
</div>
</body>
</html>

