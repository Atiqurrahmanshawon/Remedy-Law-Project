@extends('master')

@section('title')
index
@endsection

@section('content')
<!-- slider section -->
<section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500" data-simulate-touch="true">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="{{asset('frontend')}}/assets/images/slider-1.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">With Us</h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You Are Always One Step Ahead</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Strategies of our attorneys will help you solve very complex legal issues.</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="#">Request a Free Consultation</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{asset('frontend')}}/assets/images/home-slider-2.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">We Offer</h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Affordable and Effective Legal Help</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Our expert team of attorneys and consultants will be glad to provide necessary legal assistance.</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="#">Request a Free Consultation</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{asset('frontend')}}/assets/images/home-slider-3.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">With Our Services</h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">You Will Get Extensive Legal Support</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">We have years of experience in providing legal help in various spheres of law.</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="#">Request a Free Consultation</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar d-lg-none"></div>
          <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>
<!-- Appointment  -->
<section class="bg-whisper">
        <div class="container">
          <div class="row">
          <div class="col-xl-5 d-none d-xl-block">
              <div style="margin-top: -40px;">
                <img src="{{asset('frontend')}}/assets/images/team.jpg" alt="" width="472" height="753"/>
                <!-- <figcaption class="figure-caption text-center">A caption for the above image.</figcaption> -->
              </div>
              <div class="caption text-center">   
                  <h4>Consult your Case with Our best Team</h4>
                  <h5>Starting with $300</h5>
              </div>
            </div>
                  
            <div class="col-md-10 col-lg-9 col-xl-7">
              <div class="section-50 section-md-75 section-xl-100">
                <h3>Appointment</h3>
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                  <div class="row row-30">
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="request-form-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="request-form-name">Name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                      <input type="date" name="bday" max="3000-12-31" 
                                        min="1000-01-01" class="form-control">
                      <label class="form-label" for="appointment-date"></label>
                        <!-- <input class="form-input" id="request-form-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                        <label class="form-label" for="request-form-phone">Phone</label> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="request-form-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="request-form-email">Email</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap form-wrap-outside">
                        <!--Select 2-->
                        <select class="form-input select-filter" id="request-form-select" data-minimum-results-for-search="Infinity">
                          <option>Family Law</option>
                          <option value="Family Law">Family Law</option>
                          <option value="Business Law">Business Law</option>
                          <option value="Civil Litigation">Civil Litigation</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-wrap">
                        <textarea class="form-input" id="feedback-2-message" name="message" data-constraints="@Required"></textarea>
                        <label class="form-label" for="feedback-2-message">Message</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-md-6">
                          <button class="button  button-primary" type="submit">Make an Appointment</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <h3 class="text-center">Service</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-1.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Auto Accidents</a></div>
                  <div class="post-boxed-footer">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="{{route('appointment')}}">Appointment</a>
                  </div>
                </div>
              </article> 
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-2.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Construction Loans</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-3.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Real Estate</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-4.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Finance Law</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-1.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Auto Accidents</a></div>
                  <div class="post-boxed-footer">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-2.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Construction Loans</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-3.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Real Estate</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-4.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Finance Law</a></div>
                  <div class="post-boxed-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a class="button button-primary" href="">Appointment</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="text-center">
               <p> <a class="button button-primary"  href="">View More</a></p>
            </div>
          </div>
        </div>
      </section>

    <!-- catagory section -->
      <section class="rd-parallax bg-ebony-clay bg-image" data-on="false" data-md-on="true" style="background-image: url({{asset('frontend')}}/assets/images/catagory.png)">
        <div class="rd-parallax-layer" data-speed="0.33" data-type="media" data-url="{{asset('frontend')}}/assets/images/catagory.png"></div>
          <div class="rd-parallax-layer" data-speed="0" data-type="html">
            <div class="section-60 section-md-90">
              <div class="container">
                <h3 class="text-center">Catagory</h3>
                <p class="block-centered text-white" style="max-width: 540px;">
                  Our practice has an extensive history of long-standing relationships with law firm clients built on integrity, first-rate service, timely delivery and relevant advice.
                  
                </p>
                <div class="row row-50">
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-chat"></span>
                      <h5 class="icon-box-header">Advertising Law</h5>
                      <p>Advertising law is a broad, fast-evolving area of law that involves vetting claims about products and managing business practices.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-globe"></span>
                      <h5 class="icon-box-header">Oil &amp; Gas Law</h5>
                      <p>Includes the exploration for, and the production, transportation and processing of, crude oil, natural gas and hydrocarbons.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-books"></span>
                      <h5 class="icon-box-header">Insurance Law</h5>
                      <p>Insurance policies sold to corporate policyholders protect against a wide variety of risks.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-target-2"></span>
                      <h5 class="icon-box-header">Sports Law</h5>
                      <p>Sports is a multibillion-dollar global industry enjoying unprecedented growth.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-presentation-3"></span>
                      <h5 class="icon-box-header">Education Law</h5>
                      <p>Education law deals with public and private institutions at all levels – primary, secondary and higher education.</p>
                    </article>

                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <article class="icon-box-vertical icon-box-vertical-sm"><span class="novi-icon icon icon-primary icon-lg mercury-icon-card"></span>
                      <h5 class="icon-box-header">Elder Law</h5>
                      <p>An impressive UI kit comprising 200+ layered PSD source files will be a useful addition to every designer’s toolbox.</p>
                    </article>

                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <!-- attorney -->
      <section class="section-60 section-lg-100">
        <div class="container">
          <div class="row row-40 align-items-sm-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-4.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Amanda Smith</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Paralegal</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-3.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">John Doe</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Attorney</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-2.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 text-center">
              <div class="block-wrap-1">
                <div class="block-number">06</div>
                <h3 class="text-normal">Experts</h3>
                <p class="h5 h5-smaller text-style-4">in Their Fields</p>
                <p>If you or your business is facing a legal challenge, contact us today to arrange a free initial consultation with an attorney.</p><a class="link link-group link-group-animated link-bold link-secondary" href="#"><span>Read more</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
              </div>
            </div>
          </div>
          <div class="row row-40 align-items-sm-end">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-1.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Amanda Smith</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Paralegal</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-2.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">John Doe</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Attorney</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-3.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="{{asset('frontend')}}/assets/images/attorney-4.jpg" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#">Vanessa Ives</a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption">Legal Assistant</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-66 section-md-90 section-xl-bottom-100">
        <div class="container">
          <h3 class="text-center">Testimonials</h3>
          <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
            <div class="item">
              <blockquote class="quote-bordered">
                <div class="quote-body">
                  <div class="quote-open">
                    <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                      <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                    </svg>
                  </div>
                  <div class="quote-body-inner">
                    <h6>One of The Most Ethical Lawyers I’ve Ever Known...</h6>
                    <p>
                      <q>I’ve never known another lawyer more prepared or focused.  John has the ability to dissect a case much like a skilled surgeon, with absolute calm.  Nothing seems to distract him from his goal on a case, which of course, makes him extremely tough to beat.</q>
                    </p>
                  </div>
                </div>
                <div class="quote-footer">
                  <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circle" src="{{asset('frontend')}}/assets/images/testimonial-1.jpg" alt="" width="68" height="68"/>
                    </div>
                    <div class="unit-body">
                      <cite>Mark Wilson</cite>
                      <p class="text-primary">CFO, Wilson Ltd.</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="quote-bordered">
                <div class="quote-body">
                  <div class="quote-open">
                    <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                      <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                    </svg>
                  </div>
                  <div class="quote-body-inner">
                    <h6>LawExpert is One of The Best...</h6>
                    <p>
                      <q>John Doe is one of those attorneys who has it all-talent and skill, compassion for his clients, and the ability to communicate well with anyone he meets. This is one of the best combinations for a trial attorney and he is one of the best.</q>
                    </p>
                  </div>
                </div>
                <div class="quote-footer">
                  <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circle" src="{{asset('frontend')}}/assets/images/testimonial-2.jpg" alt="" width="68" height="68"/>
                    </div>
                    <div class="unit-body">
                      <cite>Amanda Eberson</cite>
                      <p class="text-primary">CEO, Eberson Co.</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>

      <!-- Counter section -->
      <section class="section parallax-container bg-black" data-parallax-img="{{asset('frontend')}}/assets/images/catagory.png" style="background-image: url({{asset('frontend')}}/assets/images/happy.jpg)">
        <div class="parallax-content">
          <div class="section-50 section-md-90">
            <div class="container">
              <div class="row row-40">
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-group"></span>
                    <div class="text-large counter">1450</div>
                    <p class="box-header">Happy Clients</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-scales"></span>
                    <div class="text-large counter">23</div>
                    <p class="box-header">Years of Experience</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-partners"></span>
                    <div class="text-large counter counter-percent">98</div>
                    <p class="box-header">Successful Cases</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-case"></span>
                    <div class="text-large counter">7500</div>
                    <p class="box-header">Personal Injury Cases</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <h3 class="text-center">Blog</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-1.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">The Lawyers Collective Women's Rights Initiative</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-14">JUNE 14, 2019</time>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-2.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Legal Documents Every Landlord Needs</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-20">JUNE 20, 2019</time>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-3.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Help Us Make the Law Accessible for Everyone</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-23">JUNE 23, 2019</time>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="{{asset('frontend')}}/assets/images/blog-4.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">5 Legal Documents for Military Service People</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-12">JUNE 12, 2019</time>
                      </li>
                      <!-- <li><span>by</span><a href="#">Admin</a></li> -->
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
@endsection
