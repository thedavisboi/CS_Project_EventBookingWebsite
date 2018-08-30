<?php include "header.php"; 

	$eventID = $_SESSION["eventID"];

	$sql = "SELECT * from events where eventID = $eventID";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0){
		//output data of each row
		while($row = mysqli_fetch_assoc($result)){
			echo ""
		}
	}else {
		echo "0 results";
	}

?>

<div class="container">

  <h2>Confirmation Page...</h2>
	
	<?php include "leftPanel.php" ?>

<div class="contents">
		
	<div id="right">

		<p>Please review the existing information and click confirm to book </p>

		<p>Course Title: </p>

		<p>Course Description: </p>

		<p>Course Price: </p>

		<p><input type="submit" name="confirm" value="Confirm"></p>
	
	</div>

</div>
</div>



<?php include "footer.php"; ?>