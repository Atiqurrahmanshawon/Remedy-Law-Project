@extends('master')

@section('title')
About
@endsection

@section('content')

<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/about-us.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>About Us</h2>
          </div>
        </div>
      </section>

      <section class="section-66 section-md-90 section-xl-bottom-120">
        <div class="container">
          <h3>Who We Are</h3>
          <div class="row row-40 justify-content-xl-between align-items-lg-center">
            <div class="col-md-6 col-xl-5 text-secondary">
              <div class="inset-md-right-15 inset-xl-right-0">
                <p>We do not see ourselves simply as 'lawyers' but will always strive to be our clients' trusted adviser whether that be in a commercial or personal context. We provide additional services well beyond those that might be expected of a law firm.</p>
                <p>
                  Our core values are integrity and trust, the encouragement of innovation, teamwork and the continuing personal development of everyone at the firm.
                  
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <ul class="list-progress">
                <li>
                  <p class="animated fadeIn">Adoption Law</p>
                  <div class="progress-bar-js progress-bar-horizontal progress-bar-sisal" data-value="70" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                </li>
                <li>
                  <p class="animated fadeIn">Family Law</p>
                  <div class="progress-bar-js progress-bar-horizontal progress-bar-laser" data-value="54" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                </li>
                <li>
                  <p class="animated fadeIn">Real Estate Law</p>
                  <div class="progress-bar-js progress-bar-horizontal progress-bar-fuscous-gray" data-value="87" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                </li>
                <li>
                  <p class="animated fadeIn">Personal Injury Law</p>
                  <div class="progress-bar-js progress-bar-horizontal progress-bar-leather" data-value="90" data-stroke="4" data-easing="linear" data-counter="true" data-duration="1000" data-trail="100"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-whisper">  
        <div class="container">
          <div class="row align-items-lg-end">
            <div class="offset-md-1 offset-lg-0 col-md-8 col-lg-6 col-xl-5">
              <div class="section-60 section-md-90">
                <div class="inset-md-left-100">
                  <h3>Why Choose Us</h3>
                </div>
                <div class="inset-md-left-30 inset-md-right-30">
                  <ul class="list-xl">
                    <li>
                      <article class="icon-box-horizontal">
                        <div class="unit unit-horizontal unit-spacing-md">
                          <div class="unit-left"><span class="novi-icon icon icon-primary icon-lg mercury-icon-users"></span></div>
                          <div class="unit-body">
                            <h5><a href="#">Our Beliefs</a></h5>
                            <p>Our firm is like family. We truly believe that each case is someone’s life and we need to treat it as such.</p>
                          </div>
                        </div>
                      </article>

                    </li>
                    <li>
                      <article class="icon-box-horizontal">
                        <div class="unit unit-horizontal unit-spacing-md">
                          <div class="unit-left"><span class="novi-icon icon icon-primary icon-lg mercury-icon-lib"></span></div>
                          <div class="unit-body">
                            <h5><a href="#">Rich Experience</a></h5>
                            <p>Experience gets the job done. LawExpert’s attorneys have more than 150 years of combined legal practice.</p>
                          </div>
                        </div>
                      </article>

                    </li>
                    <li>
                      <article class="icon-box-horizontal">
                        <div class="unit unit-horizontal unit-spacing-md">
                          <div class="unit-left"><span class="novi-icon icon icon-primary icon-lg mercury-icon-briefcase"></span></div>
                          <div class="unit-body">
                            <h5><a href="#">Great Results</a></h5>
                            <p>Results are only successful when we  make a difference in your life. We’ll help you get the money and benefits.</p>
                          </div>
                        </div>
                      </article>

                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-7 offset-top-30 offset-md-top-0 d-none d-lg-block">
              <div class="image-wrap-1"><img src="{{asset('frontend')}}/assets/images/why-us.jpg" alt="" width="670" height="578"/>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection