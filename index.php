<?php include "header.php" ?>

<div class="container">

  <h2>Welcome to your next event...</h2>
	<div id="left">
		<ul id="list">
			<li><a href="index.php">Home</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Current Events</a></li>
				  <li><a href="#">Future Events</a></li>
				  <li><a href="#">Past Events</a></li>
				</ul>
			</li>
			<li><a href="about.php">Contact Us</a></li>
			<li><a href="contact.php">FAQs</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Current Events</a></li>
				  <li><a href="#">Future Events</a></li>
				  <li><a href="#">Past Events</a></li>
				</ul>
			</li>
		</ul>
	</div>

<div class="contents">

		<!--	
		<div id="loginLink">
			<?php echo $message;
				$_SESSION['page_loads'] = 0;
				$_SESSION['page_loads']++;
			?>
		</div>
		-->
						
		
	<div id="right">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

		<div class="item active">
        <img src="images/slider/01.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slider/02.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/slider/03.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End of Carousel -->
  
	<p>Squash was invented in Harrow school around 1830, when the pupils discovered that a punctured Rackets ball, which &quot;squashed&quot; on impact with the wall, produced a game with a greater variety of shots and required much more effort on the part of the players, who could not simply wait for the ball to bounce back to them as with Rackets. The variant proved popular and in 1864 the first four Squash courts were constructed at the school and Squash was officially founded as a sport in its own right.</p>
  
	<div class="tm-recommended-place-wrap">
		<div class="tm-recommended-place">
            <img src="images/hall.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
					<h3 class="tm-recommended-title">Europe Hotel</h3>
                        <p class="tm-text-highlight">Venecia, Italy</p>
                            <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                </div>              
					<a href="#" class="tm-recommended-price-box">
						<p class="tm-recommended-price">$330</p>
						<p class="tm-recommended-price-link">Event Details</p>
                    </a>
        </div>
	</div>
	
	</div>


</div> <!-- Enf of Contents -->
</div> <!-- End of Container -->

<?php include "footer.php" ?>
