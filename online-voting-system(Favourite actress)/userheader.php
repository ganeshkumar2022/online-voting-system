<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("Location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Online Voting System</title>
</head>
<body>
<div class="container-fluid bg-primary" style="color:white;">
<nav class="navbar navbar-expand">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="vote.php" style="color:white;">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="profile.php" style="color:white;">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="viewresults.php" style="color:white;">View Result</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="change_password.php" style="color:white;">change_password</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php" style="color:white;">Logout</a>
		</li>
	</ul>
</nav>
</div>

</body>
</html>