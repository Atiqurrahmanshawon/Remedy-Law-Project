@extends('master')

@section('title')
Our Service
@endsection

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/about-us.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Our Service</h2>
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
            <div class="text-center pagination-custom-wrap">
            <ul class="pagination-custom">
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
          </div>
        </div>
      </section>
@endsection