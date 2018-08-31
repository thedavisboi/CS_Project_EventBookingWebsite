<?php include "header.php"; 

	require "connection.php"; 
	$eventID = $_SESSION["eventID"];

	$sql = "SELECT * from events where eventID = $eventID";
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0){
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
			
		}
	}else {
		echo "0 results";
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
        	
        	<h1>Confirmation Page</h1>
                
				<p>Please review the existing information and click to confirm your booking </p>

			<p>Event Title:   <?php echo "$eventTitle"; ?> </p>
				

			<p>Event Description: <?php echo "$eventDesc"; ?> </p>

			<p>Event Price: <?php echo "$eventCost"; ?> </p>

			<p><input type="submit" name="confirm" value="Confirm"></p>
	            
            <div class="cleaner"></div>
                  	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

<?php include "footer.php"; ?>