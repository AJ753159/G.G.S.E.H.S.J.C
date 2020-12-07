<?php
require 'dbh.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="teacherhome.php">Home</a> > <a href="teacherUpdtStudent.php">Update Student</a> > <a href="teacherUpdtStudentBack.php">Update Student Details</a></p>
</div>  
      <div class="teacher">
        <form class="teacher-id" action="teacherUpdtStudentDBack.php" method="post">
          
            <h4><strong>Student ID:</strong> <?php echo "<strong>".$_SESSION["sid"]."</strong>" ?></h4>

            

            <h4>Enter Student Name:</h4>
            <input class="input-text1" type="text" name="sname" placeholder="Student Name" required> 

            <h4>Enter Student Standard:</h4> 
            <input class="input-text1" type="text" name="std" placeholder="Student Std" required> 

            <h4>Enter Student Phone Number:</h4> 
            <input class="input-text1" type="text" name="phoneno" placeholder="Student Phone No" required>

            <h4>Enter Student Email ID:</h4> 
            <input class="input-text1" type="text" name="email" placeholder="Student Email" required>

            <h4>Enter Student Password:</h4>
            <input class="input-text1" type="text" name="pwd" placeholder="Student Password" required> 

            <button class="btn-submit" type="submit" name="updsub">Submit</button>
        </form>
        <a href="teacherhome.php"><button class="btn-backB">Back </button></a>

    
    
    </div>
   
        <?php include 'footer.php' ?>
      
  </body>
</html>

<?php


?>
