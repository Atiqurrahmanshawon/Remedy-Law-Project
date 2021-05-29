@extends('master')

@section('title')
Case Study
@endsection

@section('content')

<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/happy.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Case Study</h2>
          </div>
        </div>
      </section>

      <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <div class="row row-30 justify-content-md-center justify-content-lg-start">
            <div class="col-md-9 col-lg-6 height-fill">
              <article class="post-block">
                <div class="post-image"><img src="{{asset('frontend')}}/assets/images/case-study-1.jpg" alt="" width="570" height="253"/>
                </div>
                <div class="post-body">
                  <h4 class="post-header"><a href="blog-post.html">Pitfalls of Dismissing</a></h4>
                  <ul class="post-meta">
                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Joan Williams</span></li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                      <time datetime="2018-01-01">5 days ago</time>
                    </li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                      <ul class="list-tags-inline">
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Employer</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-md-9 col-lg-6 height-fill">
              <article class="post-block">
                <div class="post-image"><img src="{{asset('frontend')}}/assets/images/case-study-2.jpg" alt="" width="570" height="253"/>
                </div>
                <div class="post-body">
                  <h4 class="post-header"><a href="blog-post.html">Tips for Social Security Disability Process</a></h4>
                  <ul class="post-meta">
                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Tom Park</span></li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                      <time datetime="2018-01-01">5 days ago</time>
                    </li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                      <ul class="list-tags-inline">
                        <li><a href="#">Security,</a></li>
                        <li><a href="#">People</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-md-9 col-lg-6 height-fill">
              <article class="post-block">
                <div class="post-image"><img src="{{asset('frontend')}}/assets/images/case-study-3.jpg" alt="" width="570" height="253"/>
                </div>
                <div class="post-body">
                  <h4 class="post-header"><a href="blog-post.html">Tips for Managing Workers’ Compensation Claims</a></h4>
                  <ul class="post-meta">
                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>John Miller</span></li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                      <time datetime="2018-01-01">5 days ago</time>
                    </li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                      <ul class="list-tags-inline">
                        <li><a href="#">Claims</a></li>
                        <li><a href="#">Business</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-md-9 col-lg-6 height-fill">
              <article class="post-block">
                <div class="post-image"><img src="{{asset('frontend')}}/assets/images/case-study-4.jpg" alt="" width="570" height="253"/>
                </div>
                <div class="post-body">
                  <h4 class="post-header"><a href="blog-post.html">LawExpert Law Firm Gives Back</a></h4>
                  <ul class="post-meta">
                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Julien Miro</span></li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                      <time datetime="2018-01-01">5 days ago</time>
                    </li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                      <ul class="list-tags-inline">
                        <li><a href="#">Law Firm</a></li>
                        <li><a href="#">Sponsor</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-md-9 col-lg-6 height-fill">
              <article class="post-block">
                <div class="post-image"><img src="{{asset('frontend')}}/assets/images/case-study-5.jpg" alt="" width="570" height="253"/>
                </div>
                <div class="post-body">
                  <h4 class="post-header"><a href="blog-post.html">What Do I Do About Medical Bills from My Car Accident ?</a></h4>
                  <ul class="post-meta">
                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Amelia Anderson</span></li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                      <time datetime="2018-01-01">5 days ago</time>
                    </li>
                    <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                      <ul class="list-tags-inline">
                        <li><a href="#">Law Firm</a></li>
                        <li><a href="#">Attorney</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
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
      </section>

@endsection