<?php include "header.php" ?>

<div class="container">

  <h2>Welcome to your next event...</h2>
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

<div class="contents">
<div class="tab-pane fade show active" id="4a">
                    <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Asia Resort Hotel</h3>
                                    <p class="tm-text-highlight">Singapore</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$440</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Nullam eget est a nisl</h3>
                                    <p class="tm-text-highlight">Yangon, Myanmar</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$450</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                    <p class="tm-text-highlight">Bangkok, Thailand</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$460</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Lorem ipsum dolor sit</h3>
                                    <p class="tm-text-highlight">Vientiane, Laos</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$470</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
Inside!!!
</div>
</div> <!-- End of Container -->

<?php include "footer.php" ?>
