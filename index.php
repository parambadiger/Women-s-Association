<?php
require 'header.php';
?>
<title>Home</title>
<link rel="stylesheet" href="css/main.css">

<div id="container">
    <div id="content">
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
                    <img src="img/slide1.jpg">
                    <div class="carousel-caption">
                        <p>LA is always so much fun!</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide2.jpg">
                    <div class="carousel-caption">
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide3.jpg">
                    <div class="carousel-caption">
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
    </div>

    <div id="content">
        <center><h2>NEW EVENTS</h2></center><hr class="hrstyle">
        <div id="newevent">
            <div>
                <h3>Event Title</h3>
                <img src="img/slide1.jpg">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde at nesciunt, illum dolores omnis minus iste qui ipsam totam et adipisci nulla cumque exercitationem ad inventore doloremque ducimus harum tempora consequatur labore ullam cupiditate ipsa optio odit? Cupiditate, sit ab. Beatae illo illum facere harum unde praesentium, cupiditate similique architecto?</p>
            </div>
            <div>
                <h3>Event Title</h3>
                <img src="img/slide2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam exercitationem ad mollitia quasi iure ipsa dolorem veritatis dolores ipsam natus impedit tenetur earum porro magnam atque temporibus perspiciatis quis voluptatibus, praesentium in omnis. Error nobis, voluptatem sit odit temporibus quibusdam fugit aspernatur eos enim rerum minima unde, fugiat quis excepturi?</p>
            </div>
        </div>
    </div>

    <div id="content">
        <div id="ourgoal">
            <center><h2>OUR GOAL</h2></center><hr class="hrstyle">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolore beatae exercitationem earum minus voluptates numquam, dolor placeat aut, voluptate in, illo vel labore possimus sit libero. Dicta perspiciatis sit quos debitis exercitationem, atque tenetur itaque quo, illum nulla minus expedita nostrum sapiente ipsa. Veritatis delectus debitis vel maiores ratione optio rem fugiat minima quas architecto magni voluptates iste quos, tempora harum, laudantium blanditiis, fugit tempore ab atque quaerat omnis! Nostrum ab nemo a, accusamus nobis debitis, incidunt veritatis inventore laudantium, quis sunt quo. Vero fugiat pariatur ratione consectetur. Perferendis corporis quas exercitationem, nam corrupti velit eveniet id quae iste?</p>
        </div>
    </div>
</div>

<?php
  require 'footer.php';
?>