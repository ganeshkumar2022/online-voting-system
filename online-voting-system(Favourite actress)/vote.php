<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Voting System for bbollywood actress</title>
	<style>
		img
		{
			height:200px;
			width:200px;
		}
	</style>
</head>
<body>
	<?php
	include('userheader.php');
include('dbconnection.php');
if(isset($_POST["votehim"]))
{
	$votes=$_POST["actress"];
	$email=$_SESSION["email"];
	$sql="select name from register where email='$email'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	$username=$row["name"];
	$selects="select name from vote where name='$username'";
	$results=mysqli_query($con,$selects);
	if(mysqli_num_rows($results)>0)
	{
		echo "<script>alert('You are already voted...');</script>";

	}
 else
 {
	$insertvote="insert into vote (name,votes) values ('$username','$votes')";
	if(mysqli_query($con,$insertvote))
	{
		echo "<p style='color:green;'>You Voted successfully</p>";

	}
	else
	{
		echo "<p style='color:red;'>not voting....</p>";
	}
  }
}

	?>
<div class="container">
	<form action="vote.php" method="post" autocomplete="off">
	<h4 class="text-primary">Which Celebrity is your favourite actress ? Vote him!!!</h4>
	<div class="row">
	
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-dark" style="color:white;">Deepika padukone</div>
  <div class="card-body"><img src="images/deepika.jfif"></div>
  <div class="card-footer bg-dark" style="color:white;"><input type="radio" name="actress" required value="deepika_padukone">Vote him</div>
		</div>

	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-success" style="color:white;">Shardha Kapoor</div>
  <div class="card-body"><img src="images/shardha.jfif"></div>
  <div class="card-footer bg-success" style="color:white;"><input type="radio" name="actress" value="shardha_kapoor">Vote him</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-info" style="color:white;">Alia Bhatt</div>
  <div class="card-body"><img src="images/alia.jfif"></div>
  <div class="card-footer bg-info" style="color:white;"><input type="radio" name="actress" value="alia_bhat">Vote him</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-warning" style="color:white;">Radhika Apte</div>
  <div class="card-body"><img src="images/radhika.jfif"></div>
  <div class="card-footer bg-warning" style="color:white;"><input type="radio" name="actress" value="radhika_apte">Vote him</div>
		</div>
	</div>
</div>
	<div class="row" style="margin-top:30px;">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-danger" style="color:white;">Ananya Pandey</div>
  <div class="card-body"><img src="images/ananya.jfif"></div>
  <div class="card-footer bg-danger" style="color:white;"><input type="radio" name="actress" value="ananya_pandey">Vote him</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-secondary" style="color:white;">Kiara Advani</div>
  <div class="card-body"><img src="images/kiara.jfif"></div>
  <div class="card-footer bg-secondary" style="color:white;"><input type="radio" name="actress" value="kiara_advani">Vote him</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header bg-primary" style="color:white;">Priyanka Chopra</div>
  <div class="card-body"><img src="images/priyanka.jfif"></div>
  <div class="card-footer bg-primary" style="color:white;"><input type="radio" name="actress" value="priyanka_chopra">Vote him</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header" style="background-color:violet;color:white;">Katrina kaif</div>
  <div class="card-body"><img src="images/katrina.jfif"></div>
  <div class="card-footer" style="background-color:violet;color:white;"><input type="radio" name="actress" value="katrina_kaif">Vote him</div>
		</div>
	</div>
	
    </div><br><br>
    <center>
<button type="submit" name="votehim" class="btn btn-primary">Submit Your Vote</button>
</center>
<br>
</form>
</div>
</body>
</html>
