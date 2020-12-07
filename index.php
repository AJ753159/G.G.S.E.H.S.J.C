<!DOCTYPE html>
<html>
<head>
	<title>Header of Index Page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
  <style>

  img{
  display: block;
  object-fit: cover;  

}
h4{
  text-align: center; 
}
.box{
  display: inline-block;
  width: 500px;
}
</style>
</head>
<body>
	<?php include 'header.php' ?>
	<?php include 'nav.php' ?>
	<section class="section" style="width: 100%; padding-left: 150px; padding-right: 150px;">
  <table>
	<td align="justify" valign="top" width="100%">
    <font face="Bradley Hand ITC" size="6" color="black"><b>Welcome All</b></font>
    <font face="Comic Sans MS" size="4" color="black">
    <p>
    Guru Gobind Singh English High School was started in 1978. The school is affiliated to the Maharashtra State Board of Secondary and Higher Secondary Education, Pune.

    The school is a co-ed institution which aims at all around development of a child i.e. physical, mental, emotional, moral and spiritual. To meet this goal, co-curricular and extra curricular activities are conducted on regular basis.

    The school has a team of well qualified and experienced teaching staff who besides academics, also guide children for co-curricular and extra curricular activities. They give their best towards the all round development of the pupils. It is our constant endeavor to create a place of such happiness where learning and happiness go hand in hand.
  </p>
  </font>
 <br>
  <font face="Bradley Hand ITC" size="6" color="black"><b>MISSION</b></font>
    <font face="Comic Sans MS" size="4" color="black">
      <p>
    Our institution is totally committed to impart quality education to the students; to imbibe in them the spirit of social, moral and ethical values; foster a spirit of awareness and understanding, develop mutual respect and good communication skills, and thus enable them to become responsible citizens of the country.</p>
    </font>
  <br>
    <font face="Bradley Hand ITC" size="6" color="black"><b>VISION</b></font>
    <font face="Comic Sans MS" size="4" color="black">
    <p>
    To set realistic goals by developing a well-planned road map; to develop holistic approach towards imparting meaningful education; to create an environment where learning creates self-confidence and self-awareness.
    To employ highly committed and dedicated teaching professional; to develop modern infrastructure and employ technology to keep the youth abreast with the current world scenario.</p>
    </font>
 
  </td>
	</table>
  


<div class="container" align="center">
    <!-- <div class="row"> -->
      <div class="col-md-6">
        <div class="card">
          <h4 >Contact Us</h4>
          <div class="row" style="margin: 10px">
            <!-- <div class="col-md-6">
              <div class="card-body">
                <div class="box">
                  <img src="unnamed.png" alt="Guru Gobind School" height="400px" width="500px" >
                </div>  
              </div>
            </div> -->
            <!-- <div class="col-md-6"> -->
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <!-- <label>Full Name</label> -->
                    <input type="text" class="form-control" placeholder="Full Name">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                    <!-- <label>Email address</label> -->
                    <input type="email" class="form-control" placeholder="Email address">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                    <!-- <label>Phone No.</label> -->
                    <input type="text" class="form-control" placeholder="Phone No.">
                  </div>
                  <div class="form-group">
                    <!-- <label>Subject</label> -->
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <!-- <label>Message</label> -->
                    <textarea name="" class="form-control" rows="5" placeholder="Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

	<?php include 'footer.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
