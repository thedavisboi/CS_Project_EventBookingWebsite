<?php include "header.php";

	require "connection.php";

	$sql = "SELECT * from events";

	$result = mysqli_query($conn, $sql);
?>

<div class="container">

	<h2>Welcome to your next event...</h2></br>
	
<?php include "leftPanel.php";

<div class="contents">

	<div id="right">


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
					<a href="#" class="tm-recommended-price-box">
						<p class="tm-recommended-price"> $<?php echo "$eventCost" ?> </p>
						<p class="tm-recommended-price-link">Book Your Ticket</p>
                    </a>
        </div>
	</div>


<?php

		}
	}else {
		echo "0 results";
	}

?>

</div> <!-- end of right -->

</div> <!-- end of contents -->

</div> <!-- end of container -->


<?php include "footer.php"; ?>

