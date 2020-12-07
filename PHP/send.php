<?php
require 'dbh.php';
session_start();

if(isset($_POST['addsub']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  $uid = $_POST['uid'];
  $pan = $_POST['pan'];
  $class = $_POST['class'];
  $managequota = $_POST['managequota'];
  $sportquota = $_POST['sportquota'];

  $sql = "INSERT INTO example(name, email, dob, gender, fname, mname, add1, add2, city, state, pincode, uid, pan, class, managequota, sportquota) VALUES('$name','$email','$dob','$gender','$fname','$mname','$add1','$add2','$city','$state','$pincode','$uid','$pan','$class','$managequota','$sportquota')";


  if(mysqli_query($conn,$sql))
    {
      echo "<script>alert('Student Successfully Added'); window.location.href='prAbouteme.php';</script>";
    }
    else
    {
      echo "<script>alert('Error Occured in Adding Student'); window.location.href='header.php';</script>";
    }

  echo "connection Successfully";
}

else echo "error";
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
?>


