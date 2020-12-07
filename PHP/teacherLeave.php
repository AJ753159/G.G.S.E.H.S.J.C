<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Teacher Leave Requests</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="studenthome.php">Home</a> > <a href="teacherLeave.php">Teacher Leave</a></p>
  </div>
  <div class="teacher">
    <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <h4>Enter Teacher ID number(Receiver):</h4>
        <input class="input-text1" type="text" name="pid" placeholder="Pricipal ID number"> 
        <h4>Reason For Leave</h4>
        <textarea class="input-text1" name="reason" rows="5" cols="70" placeholder="Message"></textarea>
        <h4>From(Date):</h4>
        <input class="input-text1" type="date" name="fdate">
        <h4>To(Date):</h4>
        <input class="input-text1" type="date" name="tdate">
        <button class="btn-submit" name="lvsub">Submit</button>
    </form>
    <div buttons>
    <a href="teacherhome.php" style="color:white"><button class="btn-back">Back </button></a></div>


  </div>
  <?php include 'footer.php' ?>
  </body>
</html>


 <?php
  if(isset($_POST["lvsub"]))
  {
  $tid = $_SESSION["tid"];
  $pid = $_SESSION["pid"];
  $reason = $_POST["reason"];
  $fdate = date_format(date_create($_POST["fdate"]),"Y/m/d");
  $tdate = date_format(date_create($_POST["tdate"]),"Y/m/d");

        $sqls = "SELECT * FROM teacherleave WHERE tid=".$tid;
        $ress = mysqli_query($conn,$sqls);
        if(mysqli_num_rows($ress) == 0)
        {
          $sql1 = "INSERT INTO teacherleave VALUES('".$tid."','".$pid."','".$reason."','".$fdate."','".$tdate."')";
          $res1 = mysqli_query($conn,$sql1);
          if($res1)
          {
            echo "<script>alert('1Leave Request Submitted Successfully'); window.location.href='../PHP/teacherHome.php';</script>";
          }
          else echo "<script>alert('1Request submission unsuccessful'); window.location.href='../PHP/teacherHome.php';</script>";

        }
        else{
          $sql1 = "UPDATE teacherleave SET reason ='".$reason."',fdate = '".$fdate."',tdate ='".$tdate."' WHERE tid =$tid";
          if(mysqli_query($conn,$sql1))
          {
            echo "<script>alert('Leave Request Submitted Successfully'); window.location.href='../PHP/teacherHome.php';</script>";
          }
          else echo "<script>alert('Request submission unsuccessful'); window.location.href='../PHP/steacherHome.php';</script>";
        }
}

?>
