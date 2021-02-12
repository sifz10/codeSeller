@extends('layouts.HomeLayout')
@section('content')
  <div id="content-scroll">
    <div id="main">
        <!-- Main Content -->
        <div id="main-content">
          @if (Session::has('success'))
            <script>
              alert(session('success'));
            </script>
          @endif
                <!-- Showcase Slider Holder -->
                <div id="showcase-carousel-holder" class="disable-drag">
                    <div id="itemsWrapperLinks">


                        <!-- Showcase Slider -->
                        <div id="showcase-slider" class="swiper-container">
                            <div id="itemsWrapper" class="swiper-wrapper">

                                <div class="swiper-slide" data-slide="01">
                                    <div class="img-mask">
                                        <div class="section-image"><img src="{!! asset('FontendAsset') !!}/images/background2.jpg" class="item-image grid__item-img" alt=""></div>
                                        <img class="grid__item-img grid__item-img--large" src="{!! asset('FontendAsset') !!}/images/background2.jpg"/>
                                    </div>
                                    <div class="move-caption">
                                        <div class="outer">
                                            <div class="inner">
                                                <div class="move-title" data-swiper-parallax-x="-200%"><span>Google Play Code(INR)</span></div>
                                                <a data-type="page-transition" href="{!! route('inrPlayCode') !!}"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="move-caption stroked">
                                        <div class="outer">
                                            <div class="inner">
                                                <div class="move-title thumb-link" data-swiper-parallax-x="-200%" data-firstline="View" data-secondline="Products"><span>Google Play Code(INR)</span></div>
                                                <div class="subtitle" data-swiper-parallax-x="-60%"><span>By Now</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="swiper-slide" data-slide="02">
                                    <div class="img-mask">
                                        <div class="section-image"><img class="item-image grid__item-img" src="{!! asset('FontendAsset') !!}/images/background2.jpg" alt=""></div>
                                        <img class="grid__item-img grid__item-img--large" src="{!! asset('FontendAsset') !!}/images/background2.jpg" />
                                    </div>
                                    <div class="move-caption">
                                        <div class="outer">
                                            <div class="inner">
                                                <div class="move-title" data-swiper-parallax-x="-200%"><span>Google Play Code(USD)</span></div>
                                                <a data-type="page-transition" href="{!! route('usdPlayCode') !!}"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="move-caption stroked">
                                        <div class="outer">
                                            <div class="inner">
                                                <div class="move-title thumb-link" data-swiper-parallax-x="-200%" data-firstline="View" data-secondline="Products"><span>Google Play Code(USD)</span></div>
                                                <div class="subtitle" data-swiper-parallax-x="-60%"><span>Buy Now</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Showcase Slider -->
                  </div>
                </div>
                <!-- Showcase Slider Holder -->

        </div>
        <!--/Main Content -->

    </div>
    <!--/Main -->

    <!-- Footer -->
    <footer class="hidden">
        <div id="footer-container">

            <div class="button-wrap left disable-drag swiper-prev">
                <div class="icon-wrap parallax-wrap">
                    <div class="button-icon parallax-element">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </div>
                <div class="button-text sticky left"><span data-hover="Prev Slide">Prev Slide</span></div>
            </div>

            <div class="swiper-pagination disable-drag"></div>

            <div class="button-wrap right disable-drag swiper-next">
                <div class="icon-wrap parallax-wrap">
                    <div class="button-icon parallax-element">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
                <div class="button-text sticky right"><span data-hover="Next Slide">Next Slide</span></div>
            </div>

        </div>
    </footer>
    <!--/Footer -->


    </div>
@endsection
