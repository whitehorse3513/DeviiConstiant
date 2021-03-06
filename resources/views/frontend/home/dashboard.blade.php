<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <title>Devii constient</title>
</head>
<body>

<!--[Header]-->
<header class="header">
    <div class="container">
        <div class="row">

            <div class="col-md-4"><a class="navbar-brand" href="#"><img src="images/logo.png" alt="#"></a></div>
            <div class="col-md-8"><div class="right-header"><div class="btn green"><a href="#">Menu</a> <a href="#">Login</a></div></div> </div>
        </div>
    </div>
    <!--<div  class="main-nav">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container"> <a class="navbar-brand" href="#"><img src="images/logo.png" alt="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"> <a class="nav-link" href="#">Seek Help</a> </li>
              <li class="nav-item"> <a class="nav-link " href="#">Free Speech</a> </li>
              <li class="nav-item"> <a class="nav-link " href="#">Blog</a> </li>
              <li class="nav-item"> <a class="nav-link " href="#">Events</a> </li>
              <li class="nav-item"> <a class="nav-link " href="#">Donate</a> </li>
              <li class="nav-item"> <a class="nav-link " href="#">Store</a> </li>
            </ul>
            <Div class="my-2 my-lg-0">
              <div class="btn green"><a href="#">Login</a></div>
            </Div>
          </div>
        </div>
      </nav>
    </div>-->


</header>
<!--[/Header]-->


<div class="banner-row">
    <div class="homeSlider">
        <div class="slick-colm">

            <img data-lazy="http://kenwheeler.github.io/slick/img/fonz1.png" alt="#" />


        </div>
        <div  class="slick-colm"><img data-lazy="http://kenwheeler.github.io/slick/img/fonz2.png"  alt="#"/></div>

    </div>
    <div class="container">
        <div class="banner-dta">
            <div class="slide-titel">
                <h1>Need someone to talk to?</h1>
                <p>Devii  Constient connects you to caring listeners for free emotional support</p>
            </div>
            <Div class="login-acct">
                <a href="#"><img src="images/user.png" alt="#">individual <span>(For myself)</span></a>
                <a href="#" class="cpl-btn"><img src="images/hart.png" alt="#">Couples <span>(For me and my partner)</span></a>
                <a href="#" class="teen-btn"><img src="images/user-1.png" alt="#">Teenagers <span>(For my child)</span></a> </Div>
            <div class="row conts-row conts text-center">
                <div class="col">
                    <div class="counter">

                        <h2 class="timer count-title count-number" data-to="54292703" data-speed="1500"></h2>
                        <p class="count-text ">Number Of registered users</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">

                        <h2 class="timer count-title count-number" data-to="5110" data-speed="1500"></h2>
                        <p class="count-text ">Number Of registered Counsellors</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>







<!--[Footer]-->
<div class="footer">
    <Div class="container">
        <Div class="footer-inner">
            <Div class="row">
                <div class="col-md-8">
                    <div class="foot-nav">
                        <ul >
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Find a Therapist</a></li>
                            <li><a href="#">For Counselors</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                    <div class="foot-nav copy-nav">
                        <ul >
                            <li><a href="#">Terms & COnditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li> @2019 BetterHelp </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <Div class="foot-social">
                        <a href="#" target="_blank" class="link-icn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="_blank" class="fb-icn"><i class="fab fa-facebook-f"></i></a>
                    </Div>

                </div>


            </Div>
        </Div>
    </Div>
</div>


<!--[/Footer]-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/conter.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>$(document).ready(function() {
        $('.homeSlider').slick({
            autoplay: true,
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            lazyLoad: 'ondemand', controls: false,
        });
    });
</script>

<script>$(document).ready(function() {

        var $menuBtn = $('.menu-btn');
        var $nav = $('#nav');
        var $stylebox = $('#style-box');
        var $styleli = $stylebox.find('li');

        $menuBtn.on('click', function() {
            var $this = $(this);
            var styles = $stylebox.data('styles');
            $this.toggleClass("active");
            $this.next('#nav').toggleClass("open");
            $stylebox.toggleClass(styles);
        });

        $nav.addClass('leftslide');

        $styleli.on('click', function() {
            var $this = $(this);
            $this.siblings().removeClass('now');
            $this.addClass('now');
            var styles = $this.data('styles');
            $nav.removeClass();
            $nav.addClass(styles);
            $nav.siblings('#style-box').removeClass();
            $nav.siblings('#style-box').data('styles',styles);
        });



    });</script>
</body>
</html>
