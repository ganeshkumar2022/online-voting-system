<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Results</title>
</head>
<body>
  <?php
  include('userheader.php');
  include('dbconnection.php');
  //ananya pandey
  $sql2="select count(votes) as ananya from vote where votes='ananya_pandey'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $ananya=$row2['ananya'];

  //alia bhat
  $sql2="select count(votes) as ananya from vote where votes='alia_bhat'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $alia=$row2['ananya'];

  //kiara advani
  $sql2="select count(votes) as ananya from vote where votes='kiara_advani'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $kiara=$row2['ananya'];

  //deepika padukone
  $sql2="select count(votes) as ananya from vote where votes='deepika_padukone'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $deepika=$row2['ananya'];

  //radhika apte
  $sql2="select count(votes) as ananya from vote where votes='radhika_apte'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $radhika=$row2['ananya'];

  //priynka chopra
  $sql2="select count(votes) as ananya from vote where votes='priyanka_chopra'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $priyanka=$row2['ananya'];

  //katrina kaif
  $sql2="select count(votes) as ananya from vote where votes='katrina_kaif'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $katrina=$row2['ananya'];

  //shardha kapoor
  $sql2="select count(votes) as ananya from vote where votes='shardha_kapoor'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $shardha=$row2['ananya'];



  ?>
  <div class="container">
  <div class="row">

    <table class="table table-hover table-bordered" style="margin-top:20px;color:green;">
      
      <tr class="bg-info" style="color:white;">
        <th>S.No</th>
        <th>Actress name</th>
        <th>Votes</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Deepika Padukone</td>
        <td><?php echo $deepika; ?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Shardha Kapoor</td>
        <td><?php echo $shardha; ?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Alia Bhat</td>
        <td><?php echo $alia; ?></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Radhkia Apte</td>
        <td><?php echo $radhika; ?></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Ananya Pandey</td>
        <td><?php echo $ananya; ?></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Kiara Advani</td>
        <td><?php echo $kiara; ?></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Priyanka Chopra</td>
        <td><?php echo $priyanka; ?></td>
      </tr>
      <tr>
        <td>8</td>
        <td>Katrina Kaif</td>
        <td><?php echo $katrina; ?></td>
      </tr>
    </table>
     

      

 </div>
</div>
</body>
</html>

