@extends('layouts.HomeLayout')
@section('content')
  @php
    $paymentMethod = DB::table('payment_methods')->get();
  @endphp
    <div id="content-scroll">
      <!-- Main -->
           <div id="main">
              <div id="hero" class="has-image autoscroll">
                  <div id="hero-styles">
                      <div id="hero-caption" class="reverse-parallax-onscroll">
                          <div class="inner">
                              <div class="hero-title"><span>Cart</span></div>
                              <div class="hero-subtitle">INR</div>
                          </div>
                      </div>
                      <div id="hero-footer">
                        <div class="hero-footer-left">
                            <div class="button-wrap left disable-drag scroll-down">
                                  <div class="icon-wrap parallax-wrap">
                                      <div class="button-icon parallax-element">
                                          <i class="fa fa-angle-down"></i>
                                      </div>
                                  </div>
                                  <div class="button-text sticky left"><span data-hover="Scroll or drag to navigate">Scroll or drag to navigate</span></div>
                              </div>
                          </div>
                          <div class="hero-footer-right">
                      <div id="share" class="page-action-content disable-drag" data-text="Share:"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="hero-image-wrapper">
                <div id="hero-background-layer" class="parallax-scroll-effect">
                      <div id="hero-bg-image" style="background-image:url({!! asset('FontendAsset') !!}/images/playcard.jpg)"></div>
                  </div>
              </div>
            </div>

            <!-- Main Content -->
            <div id="main-content">
                <div id="main-page-content">

                    <!-- Row -->
                    <div class="vc_row row_padding_top row_padding_bottom">

                        <div class="vc_row">
                          <h4 class="has-mask" data-delay="0">Your Product</h4>
                          <div class="swiper-slide">
                             <img src="{!! asset('FontendAsset') !!}/images/team1.jpg" alt="Image Title">
                           </div>
                            <p class="has-animation" data-delay="400">
                              <div class="vc_row row_padding_top">
                            	<div class="one_half">
                                	<h2 class="has-animation">Select A Payment method</h2>
                                  <h4>Product Details</h4>
                                  <p><i>Product name: Play card Code {{ $selectedProduct->price }} ({{ $selectedProduct->currency }})</i></p>
                                  <p><i>Product Status:</i> @if ($selectedProduct->quantity > 0 )<p style="color:green">In-Stock</p>  @endif @if ($selectedProduct->quantity == 0 )<p style="color:red">Stock-out</p>  @endif </p>
                                </div>
                                <hr><hr>
                                <!-- Clients Table -->
                                @if ($selectedProduct->quantity > 0)
                                <ul class="clients-table has-animation" data-delay="10">
                                  @foreach ($paymentMethod as $value)
                                    <li href="" class="link has-animation" onclick="event.preventDefault(); document.getElementById('checkoutForm{{ $loop->index }}').submit();" data-delay="150"><img src="{!! asset('./uploads/'.$value->logo) !!}" alt="{{ $value->paymentMethod }}"></li>
                                    <form id="checkoutForm{{ $loop->index }}" action="{{ route('checkout') }}" method="POST" class="d-none">
                                      <input type="text" name="product_id" value="{{ $selectedProduct->id }}" hidden>
                                      <input type="text" name="paymentMethod" value="{{ $value->paymentMethod }}" hidden>
                                      <input type="text" name="account" value="{{ $value->AccountNumber }}" hidden>
                                      <input type="text" name="price" value="{{ $selectedProduct->price }}" hidden>
                                        @csrf
                                    </form>
                                  @endforeach
                                </ul>
                                @endif
                                <!--/Clients Table -->


                            </div>
                        </div>
                    </div>
                    <!--/Row -->
                </div>
                <!--/Main Page Content -->
                <!-- Project Navigation -->
                <div id="project-nav" class="app-canvas">
                    <div class="next-project-wrap">
                        <div class="next-project-title">
                            <div class="inner">
                                <div id="itemsWrapperLinks">
                                <div id="itemsWrapper">
                                    <div class="item disable-drag active">
                                        <div class="item-appear">
                                            <div class="item-content">
                                                <a class="item-wrap ajax-link-project" data-type="page-transition" href="{!! route('usdPlayCode') !!}"></a>
                                                <div class="item-wrap-image"><img src="{!! asset('FontendAsset') !!}/images/background2.jpg" class="item-image grid__item-img" data-firstline="Next" data-secondline="Project" alt=""></div>
                                                <img class="grid__item-img grid__item-img--large" src="{!! asset('FontendAsset') !!}/images/background2.jpg" />
                                            </div>
                                            <div class="item-caption">
                                                <h2 class="item-title">Play Card Code (USD)</h2>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                                </div>
                                <div class="marquee-wrapper">
                                    <div class="next-title-marquee" data-text="Play Card Code (USD) Play Card Code (USD)">Play Card Code (USD) Play Card Code (USD)</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/Project Navigation -->


            </div>
            <!--/Main Content -->

          </div>
@endsection
