<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>DevOps & Docker</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/imgeffect.css"/>
    <script src="js/jquery.min.js"></script>
    <!-- start gallery Script -->
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        //        $(function () {
        //
        //            var filterList = {
        //
        //                init: function () {
        //
        //                    // MixItUp plugin
        //                    // http://mixitup.io
        //                    $('#portfoliolist').mixitup({
        //                        targetSelector: '.portfolio',
        //                        filterSelector: '.filter',
        //                        effects: ['fade'],
        //                        easing: 'snap',
        //                        // call the hover effect
        //                        onMixEnd: filterList.hoverEffect()
        //                    });
        //
        //                },
        //
        //                hoverEffect: function () {
        //
        //                    // Simple parallax effect
        //                    $('#portfoliolist .portfolio').hover(
        //                            function () {
        //                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
        //                                $(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');
        //                            },
        //                            function () {
        //                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeInQuad');
        //                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
        //                            }
        //                    );
        //
        //                }
        //
        //            };
        //
        //            // Run the show!
        //            filterList.init();
        //
        //
        //        });
    </script>
    <!-- Add fancyBox main JS and CSS files -->
    <!--    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>-->
    <!--    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">-->
    <script>
        //        $(document).ready(function () {
        //            $('.popup-with-zoom-anim').magnificPopup({
        //                type: 'inline',
        //                fixedContentPos: false,
        //                fixedBgPos: true,
        //                overflowY: 'auto',
        //                closeBtnInside: true,
        //                preloader: false,
        //                midClick: true,
        //                removalDelay: 300,
        //                mainClass: 'my-mfp-zoom-in'
        //            });
        //        });
    </script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!----end gallery----------->

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>
</head>

<body>
<!----start-header----------->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <!--------start-logo------>
            <div class="logo">
                <a href="/"><img src="images/neurones-logo.png" alt=""/></a>
            </div>
            <!--------end-logo--------->
            <!----start-nav-------->
            <div class="nav">
                <ul>
                    <li><a href="#about-us" class="scroll">About</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <!-----end-nav-------->
            <div class="clear"></div>
        </div>
    </div>
</div>
<!------end-header------------>
<!-- start slider -->
<div class="slider_bg" id="top">
    <div class="wrap">
        <!---start-da-slider----->
        <div class="da-slide">
            <h2><span>DevOps</span><br>&nbsp;&nbsp;&nbsp;&nbsp;& Docker & Swissquote</h2>
            <p>
                <span class="big-text">Hostname: <?php echo gethostname(); ?></span>
            </p>
            <a href="#about-us" class="scroll"><span class="da-img"> </span> </a>
        </div>
        <!---//End-da-slider----->
    </div>
</div>
<!-----end-slider-------->

<!-----start-about-------->

<div class="about" id="about">
    <div class="wrap">
        <h2 id="about-us">About US</h2>

        <p>We are a passionate DevOps team that loves great IT technologies and automation</p>

        <div class="about-grids">

            <div class="grid">
                <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
                        <ul>
                            <li><a class="sharefacebook" href="#"> </a></li>
                            <li><a class="sharetwitter" href="#"> </a></li>
                            <li><a class="sharetgoogle" href="#"> </a></li>
                            <li><a class="sharedrible" href="#"> </a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
				</span>
                    <img class="post-person" src="images/fle.jpg">
                </div>
                <div class="desc">
                    <h3>Frederic Legrand</h3>

                    <p>Senior System Engineer<br><br>f.legrand@neurones-oxygen.com</p>
                    <p></p>
                </div>
            </div>

            <div class="grid">
                <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
                        <ul>
                            <li><a class="sharefacebook" href="#"> </a></li>
                            <li><a class="sharetwitter" href="#"> </a></li>
                            <li><a class="sharetgoogle" href="#"> </a></li>
                            <li><a class="sharedrible" href="#"> </a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
				</span>
                    <img class="post-person" src="images/vca.jpg">
                </div>
                <div class="desc">
                    <h3>Valentin Cabourdin</h3>

                    <p>DevOps Specialist<br><br>v.cabourdin@neurones-oxygen.com</p>
                    <p></p>
                </div>

            </div>

            <div class="grid">
                <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
                        <ul>
                            <li><a class="sharefacebook" href="#"> </a></li>
                            <li><a class="sharetwitter" href="#"> </a></li>
                            <li><a class="sharetgoogle" href="#"> </a></li>
                            <li><a class="sharedrible" href="#"> </a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
				</span>
                    <img class="post-person" src="images/neurones.png">
                </div>
                <div class="desc">
                    <h3>Neurones</h3>

                    <p>Simplement Digital<br></p>
                    <p></p>

                </div>
            </div>
            <div class="clear"></div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<!---------end-about------------->

<div class="footer-bottom">
    <div class="wrap">
        <div class="copy">
            <p class="copy">&#169 2015 Demo by <a href="http://www.neurones.pro" target="_blank">www.neurones.pro</a>
            </p>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
        <script src="js/jquery.scrollTo.js"></script>
    </div>
</div>
</body>
</html>
