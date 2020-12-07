<?php
  require 'dbh.php';
  require 'header.php';
  $sql = "SELECT * FROM example";   
  $res = mysqli_query($conn,$sql);
  if($res)
  {
    $x=0;
  }
  else printf("error: %s\n", mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message From User</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="prhome.php">Home</a> > <a href="prMsgStudent.php">Admission Request</a></p>
</div>

      <div class="mainbod">
      <table class="table">
        <caption class="table-header"><h3>Admission Request</h3></caption>
        <tr style="background-color: Grey">
          <td ><strong>ID</strong></td><td ><strong>Name</strong></td>
          <td ><strong>Email</strong></td><td ><strong>Date Of Birth</strong></td>
          <td ><strong>Gender</strong></td><td ><strong>Father's Name</strong></td>
          <td ><strong>Mother's Name</strong></td><td ><strong>Address 1</strong></td>
          <td ><strong>Address 2</strong></td><td ><strong>City</strong></td>
          <td ><strong>State</strong></td><td ><strong>Pincode</strong></td>
          <td ><strong>Aadhar No.</strong></td><td ><strong>Pan No.</strong></td>
          <td ><strong>Class</strong></td><td ><strong>Management Quota</strong></td>
          <td ><strong>Sports Quota</strong></td><td ><strong>Operation</strong></td>
        </tr>

          <?php
          while($row = mysqli_fetch_assoc($res)) {
            {
              echo '<tr><td>'.$row['id'] . '</td><td>'.$row['name'] . "</td><td>".$row['email']."</td><td>".$row['dob'] . "</td><td>".$row['gender']."</td><td>".$row['fname'] . "</td><td>".$row['mname']."</td><td>".$row['add1'] . "</td><td>".$row['add2']."</td><td>".$row['city'] . "</td><td>".$row['state']."</td><td>".$row['pincode'] . "</td><td>".$row['uid']."</td><td>".$row['pan'] . "</td><td>".$row['class']."</td><td>".$row['managequota'] . "</td><td>".$row['sportquota'].'</td><td><a class= "action-d" href= "prAdmissionRequestdelete.php?id='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
            };
          ?>
          <?php
          };

  
    
          ?>

      </table>


      </div>
       <?php include 'footer.php' ?>


    </body>
</html>
