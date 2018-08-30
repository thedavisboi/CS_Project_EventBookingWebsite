<?php include "header.php";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$_SESSION["eventID"] = $_POST["eventID"];
		header("location: confirmation.php");
	}

?>

<?php

	require "connection.php";

	$sql = "SELECT * from events";

	$result = mysqli_query($conn, $sql);
?>

<div class="container">

	<h2>Book Your Event Now!</h2></br>
	
<?php include "leftPanel.php"; ?>

<div class="contents">

	<div class="right">

<?php

	if (mysqli_num_rows($result) > 0) {
		//output data of each row
		while($row = mysqli_fetch_assoc($result)){

			$eventID = $row["eventID"];
			$eventTitle = $row["eventTitle"];
			$eventDate = $row["eventDate"];
			$eventTime = $row["eventTime"];
			$eventVenue = $row["eventVenue"];
			$eventLocation = $row["eventLocation"];
			$eventDesc = $row["eventDesc"];
			$eventCost = $row["eventCost"];
			$eventHost = $row["eventHost"];
			$eventCategory = $row["eventCategory"];
			$eventImg = $row["eventImg"];
	?>

	<div class="tm-recommended-place-wrap">
		<div class="tm-recommended-place">
	        <img src="images/hall.jpg" alt="Image" class="img-fluid tm-recommended-img">
	            <div class="tm-recommended-description-box">
					<h3 class="tm-recommended-title"> <?php echo "$eventTitle" ?> </h3>
	                    <p class="tm-text-highlight"> <?php echo "$eventVenue" ?> </p>
	                        <p class="tm-text-gray"> <?php echo "$eventDesc" ?> </p>   
	            </div>
	            
	            	<div class="tm-recommended-price-box">
						<p class="tm-recommended-price"> $<?php echo "$eventCost" ?> </p>
							<form action="events.php" method="podt">
								<button type="submit" class="tm-recommended-price-link">Book Now!</button>
							<input type="hidden" name="" value="<?php echo "$eventID" ?>">
							</form>
	                </div>
	            
	            </div>
	</div>

	<?php
			
		}
	}else {
		echo "0 results";
	}

?>

</div> <!-- End of Right -->

</div> <!-- End of Contents -->
</div> <!-- End of Container -->

<?php include "footer.php"; ?>

