<?php

include 'dbh.php';

$id = $_GET['id'];

$deletequery = "delete from example where id=$id ";

$query = mysqli_query($conn, $deletequery);

if($query){
	?>
	<script>
		alert('Deleted Succesfull');
	</script>
	<?php
	header('location:prAdmissionRequest.php');
}else{
	?>
	<script>
		alert('Not Deleted');
	</script>
	<?php

}



?>