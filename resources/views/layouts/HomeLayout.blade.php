<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gift Code</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name="description" content="Download the best Creative Portfolio HTML Template in 2020" />
    <meta name="author" content="ClaPat Studio">
    <meta charset="UTF-8" />
    <link rel="icon" type="" href="{!! asset('FontendAsset') !!}/images/logo.gif" />
    <link href=" {!! asset('FontendAsset') !!}/css/showcase.css" rel="stylesheet" />
    <link href=" {!! asset('FontendAsset') !!}/css/hero.css" rel="stylesheet" />
    <link href=" {!! asset('FontendAsset') !!}/css/portfolio.css" rel="stylesheet" />
    <link href=" {!! asset('FontendAsset') !!}/css/shortcodes.css" rel="stylesheet" />
    <link href=" {!! asset('FontendAsset') !!}/css/assets.css" rel="stylesheet" />
    <link href=" {!! asset('FontendAsset') !!}/css/style.css" rel="stylesheet" />
    <link href="{!! asset('FontendAsset') !!}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>







<body class="hidden hidden-ball smooth-scroll drag-scroll">


	<main>
        <!-- Preloader -->
        <div class="preloader-wrap" data-firstline="Stay" data-secondline="Relaxed">
            <div class="outer">
                <div class="inner">
                    <div class="preloader-marquee-mask">
                        <div class="preloader-marquee-wrapper">
                            <div class="preloader-marquee" data-text="Loading Colega Website Loading Colega Website Loading Colega Website">LOADING GIFT CODE LOADING GIFT CODE LOADING GIFT CODE</div>
                        </div>
                    </div>

                    <div class="preloader-marquee-wrapper stroked">
                        <div class="preloader-marquee" data-text="Loading Colega Website Loading Colega Website Loading Colega Website">LOADING GIFT CODE LOADING GIFT CODE LOADING GIFT CODE</div>
                    </div>

                    <div class="percentage-wrapper"><div class="percentage" id="precent"></div></div>
                    <div class="trackbar">
                        <div class="loadbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Preloader -->

        <div class="cd-index cd-main-content">

        <!-- Page Content -->
        <div id="page-content" class="light-content" data-bgcolor="#141414">

            <!-- Header -->
            <header class="fullscreen-menu">
                <div id="header-container">


                <!-- Logo -->
                <div id="logo" class="hide-ball disable-drag">
                    <a class="{!! asset('FontendAsset') !!}" data-type="page-transition" href="{!! route('index') !!}">
                        <img class="black-logo" src="{!! asset('FontendAsset') !!}/images/logo.gif" alt="ClaPat Logo">
                        <img class="white-logo" src="{!! asset('FontendAsset') !!}/images/logo.gif" alt="ClaPat Logo">
                    </a>
                </div>
                <!--/Logo -->

                <!-- Navigation -->
                <nav>
                	<div class="nav-height">
                        <div class="outer">
                            <div class="inner">
                                <ul data-breakpoint="10025" class="flexnav">
                                    <li class="link menu-timeline"><a class="ajax-link" href="#"><div class="before-span"><span data-hover="terms & Conditions">Terms & Conditions</span></div></a></li>
                                    <li class="link menu-timeline"><a class="ajax-link" href="#"><div class="before-span"><span data-hover="Privacy Policy">Privacy Policy</span></div></a></li>
                                    <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="contact.html"><div class="before-span"><span data-hover="Contact">Return Policy</span></div></a></li>
                                    <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="about.html"><div class="before-span"><span data-hover="About">About</span></div></a></li>
                                    <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="contact.html"><div class="before-span"><span data-hover="Contact">Contact</span></div></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--/Navigation -->


                <!-- Menu Burger -->
                <div class="button-wrap right menu disable-drag">
                    <div class="icon-wrap parallax-wrap">
                        <div class="button-icon parallax-element">
                            <div id="burger-wrapper">
                                <div id="menu-burger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-text sticky right"><span data-hover="Menu">Menu</span></div>
                </div>
                <!--/Menu Burger -->

                </div>
            </header>
            <!--/Header -->

            <!-- Content Scroll -->
            @yield('content')
            <!--/Content Scroll -->

            <div id="app"></div>


		</div>
        <!--/Page Content -->

		</div>
	</main>




    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image"></div>
    <div id="rotate-device"></div>



    <script src="{!! asset('FontendAsset') !!}/js/jquery.min.js"></script>
    <script src="{!! asset('FontendAsset') !!}/js/ScrollMagic.min.js"></script>
    <script src="{!! asset('FontendAsset') !!}/js/animation.gsap.min.js"></script>
    <script src="{!! asset('FontendAsset') !!}/js/Draggable.min.js" ></script>
    <script src='{!! asset('FontendAsset') !!}/js/three.js'></script>
	<script src='{!! asset('FontendAsset') !!}/js/imagesloaded.pkgd.js'></script>
	{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&amp;sensor=false"></script> --}}
	<script src="{!! asset('FontendAsset') !!}/js/plugins.js"></script>
    <script src="{!! asset('FontendAsset') !!}/js/scripts.js"></script>



</body>
</html>
