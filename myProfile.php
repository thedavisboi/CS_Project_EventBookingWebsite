<?php include "header.php"; 

require "connection.php";

	if(isset($_SESSION["uname"])){
		$uname = $_SESSION["uname"];

		$message = ' ';
	}else{
		header("location: login.php");
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
        	
        	<h1>My Events</h1>
                 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Event Title</th>
        <th>Event Date</th>
        <th>Event Time</th>
        <th>Event Venue</th>
        <th>Event Host</th>
        <th>Event Cost</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>

<?php 
	
	
	require "connection.php";

	$sql = "SELECT events.eventTitle, events.eventDate, events.eventTime, events.eventVenue, events.eventHost, events.eventCost FROM events, bookings WHERE bookings.eventID = events.eventID AND bookings.uname = $uname";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		//output data of each row
		while($row = mysqli_fetch_assoc($result)){

			$eventTitle = $row["eventTitle"];
			$eventDate = $row["eventDate"];
			$eventTime = $row["eventTime"];
			$eventVenue = $row["eventVenue"];
			$eventHost = $row["eventHost"];
			$eventCost = $row["eventCost"];

	echo $sql;
?>

	<tr>
        <td><?php echo "$eventTitle"; ?></td>
        <td><?php echo "$eventDate"; ?></td>
        <td><?php echo "$eventTime"; ?></td>
        <td><?php echo "$eventVenue"; ?></td>
        <td><?php echo "$eventHost"; ?></td>
        <td><?php echo "$eventCost"; ?></td>
        <td>
        	<input value="Cancel" class="btn btn-dange btn-xs" type="submit" name="cancel" />
        </td>
    </tr>

<?php

		}
	}else {
		echo "0 results"; 
	}

?>


      
    </tbody>
  </table>
  </div>
	            
            <div class="cleaner"></div>
                  	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

<?php include "footer.php"; ?>