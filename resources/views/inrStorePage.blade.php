@extends('layouts.HomeLayout')
@section('content')
  <!-- Content Scroll -->
  @php
    $usdProduct = DB::table('products')->where('currency', 'INR')->get();
  @endphp
  <div id="content-scroll">


      <!-- Main -->
      <div id="main">

          <!-- Hero Section -->
          <div id="hero" class="has-image autoscroll">
              <div id="hero-styles">
                  <div id="hero-caption" class="reverse-parallax-onscroll">
                      <div class="inner">
                          <div class="hero-title"><span>Google Play Card</span></div>
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
          <!--/Hero Section -->


          <!-- Main Content -->
          <div id="main-content">
              <div id="main-page-content">

                  <!-- Row -->
                  <div class="vc_row row_padding_top row_padding_bottom">

                      <div class="vc_row">
                        <h4 class="has-mask" data-delay="0">HOW TO REDEEM</h4>
                          <p class="has-animation" data-delay="400">To redeem, enter code in the Play Store app or play.google.com <br><b>IMPORTANT!</b><br>
                          This product is applicable for Google Play INDIA store with INDIA IP Address ONLY. It is NOT redeemable for Google Play accounts created in other countries than India.
                          Violation of Google Play Gift Cards’ Terms of Service will result in CODE DEACTIVATION without prior notice. Kindly ensure the posting address, IP Address, and account settings are in line.
                          us Jonno
                          <br><b>IMPORTANT!</b><br>
                          This product is applicable for Google Play USA store in English with USA IP Address ONLY. It is NOT redeemable for Google Play accounts created in other countries than the United States.
                          Violation of Google Play Gift Cards’ Terms of Service will result in CODE DEACTIVATION without prior notice. Kindly ensure the posting address, IP Address, and account settings are in line.</p>
                      </div>
                  </div>
                  <!--/Row -->


                  <!-- Row -->
                  <div class="one_third">
                    <h1>Products:</h1>
                  </div>
                  <div class="vc_row row_padding_top row_padding_bottom dark-section" data-bgcolor="#202020">
                    <div class="vc_row row_padding_top row_padding_bottom dark-section">
                    <div class="row-half-color first half-dark-section" data-bgcolor="#202020"></div>
                    <div class="row-half-color second half-white-section" data-bgcolor="#141414"></div>
                    <div class="swiper-container content-carousel disable-drag">
                    <div class="swiper-wrapper">
                      @foreach ($usdProduct as $value)
                         <a href="{!! route('buy',$value->id) !!}">
                            <div class="swiper-slide">
                               <img src="{!! asset('FontendAsset') !!}/images/team1.jpg" alt="Image Title">
                                 <div class="content-carousel-caption">
                                     <h5>₹{{ $value->price }} (INR)</h5>
                                     <p>Buy Now</p>
                                     <a href="{!! route('buy',$value->id) !!}" class="btn btn-success"></a>
                                 </div>
                             </div>
                          </a>
                         @endforeach
                             </div>
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
      <!--/Main -->


      <!-- Footer -->
      <footer class="hidden">
          <div id="footer-container">

              <div id="backtotop" class="button-wrap left">
                  <div class="icon-wrap parallax-wrap">
                      <div class="button-icon parallax-element">
                          <i class="fa fa-angle-up"></i>
                      </div>
                  </div>
                  <div class="button-text sticky left"><span data-hover="Back Top">Back Top</span></div>
              </div>

              <div class="footer-middle">
                  <div class="copyright">2020 © <a class="link" target="_blank" href="https://www.clapat.com/">Gift Code</a>. All rights reserved.</div>
              </div>

              <div class="socials-wrap">
                  <div class="socials-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
                  <div class="socials-text">Follow Us</div>
                  <ul class="socials">
                      <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.dribbble.com/clapat" target="_blank">Db</a></span></li>
                      <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.twitter.com/clapatdesign" target="_blank">Tw</a></span></li>
                      <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.behance.com/clapat" target="_blank">Be</a></span></li>
                      <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.facebook.com/clapat.ro" target="_blank">Fb</a></span></li>
                      <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.instagram.com/clapat.themes/">Ig</a></span></li>
                  </ul>
              </div>

          </div>
      </footer>
      <!--/Footer -->
</div>
@endsection
