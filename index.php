<?php include "header.php" ?>

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

<div class="container">
  Inside!!!
</div>

<?php include "footer.php" ?>
