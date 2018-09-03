<?php include "header.php"; 

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$_SESSION["eventID"] = $_POST["eventID"];
		header("location: confirmation.php");
	}
	
?>

	<div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categories</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Sed eget purus</a></li>
                        <li><a href="#">Vestibulum eleifend</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Nunc a dui sed</a></li>
                        
                        <li class="last"><a href="#">Sed eget purus</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Events By Region </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/02.jpg" alt="" />
                    <a href="#"><img src="images/slider/01.jpg" alt="" title="This is an example of a caption" /></a>
                    <img src="images/slider/03.jpg" alt="" />
                    <img src="images/slider/04.jpg" alt="" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	<h1>Book An Event!</h1>

<?php

	require "connection.php";
	
	$sql = "SELECT * from events";

	$result = mysqli_query($conn, $sql);
	
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
			$eventCapacity = $row["eventCapacity"];
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
							<form action="index.php" method="post" >
								<button type="submit" class="tm-recommended-price-link btn btn-default btn-lg btn-block">Book Now!</button>
							<input type="hidden" name="eventID" value="<?php echo "$eventID" ?>">
							</form>
							
	                </div>
	            
	            </div>
		</div>
            
            <div class="cleaner"></div>
		
<?php
		}
	}else {
		echo "0 results";
	}

?>
    
                  	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    
<?php include "footer.php"; ?>