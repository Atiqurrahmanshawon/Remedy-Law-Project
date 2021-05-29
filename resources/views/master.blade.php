<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('frontend')}}/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fonts.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('frontend')}}/assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    
    <div class="page">
      <header class="page-head">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <ul class="rd-navbar-aside-group list-units">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="tel:#">+1 (232) 349–8447</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="mailto:#">info@demolink.org</a></div>
                        </div>
                      </li>
                    </ul>
                    <div class="rd-navbar-aside-group">
                      <ul class="list-inline list-inline-reset">
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-facebook" href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-twitter" href="#"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="{{route('index')}}">
                    <img src="{{asset('frontend')}}/assets/images/logo-main.png" alt="" width="143" height="27"/></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <div class="rd-navbar-btn-wrap"><a class="button button-smaller button-primary-outline" data-toggle="modal" data-target="#exampleModal" href="#">Appointment</a></div>
                    <ul class="rd-navbar-nav">
                      <li class=""><a href="{{route('index')}}">Home</a>
                      </li>
                      <li><a href="{{route('about')}}">About Us</a>
                      </li>
                      <li><a href="{{route('service')}}">Service</a>
                      </li>
                      <li><a href="#">Catagory</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="">catagory 1</a>
                          </li>
                         
                        </ul>
                      </li>
                      <li><a href="{{route('case')}}">Case</a>
                      </li>
                      <li><a href="{{route('blog')}}">Blog</a>
                      </li>
                      <li><a href="{{route('contact')}}">Contacts</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5>Appointment</h5>
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row row-30">
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class=" form-control" id="request-form-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="request-form-name">Name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                      <input type="date" name="bday" max="3000-12-31" 
                                        min="1000-01-01" class="form-control">
                      <label class="form-label" for="appointment-date"></label>
                        <!-- <input class="form-control" id="request-form-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                        <label class="form-label" for="request-form-phone">Phone</label> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-control" id="request-form-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="request-form-email">Email</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap form-wrap-outside">
                        <!--Select 2-->
                        <select class="form-control select-filter" id="request-form-select" data-minimum-results-for-search="Infinity">
                          <option>Family Law</option>
                          <option value="Family Law">Family Law</option>
                          <option value="Business Law">Business Law</option>
                          <option value="Civil Litigation">Civil Litigation</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-wrap">
                        <textarea class="form-control" id="feedback-2-message" name="message" data-constraints="@Required"></textarea>
                        <label class="form-label" for="feedback-2-message">Message</label>
                      </div>
                    </div>
                    
                  </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="button  button-primary" type="submit">Get Your Appointment</button>
      </div>
    </div>
  </div>
</div>

       @yield('content')

      <footer class="page-foot bg-ebony-clay">
        <div class="section-40 section-md-75">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-sm-9 col-md-11 col-xl-12">
                <div class="row row-50">
                  <div class="col-md-6 col-lg-10 col-xl-3">
                    <div class="inset-xl-right-20" style="max-width: 510px;"><a class="brand" href="index.html"><img src="{{asset('frontend')}}/assets/images/logo-main.png" alt="" width="143" height="28"/></a>
                      <p>
                        If you or your business is facing a legal
                        challenge that calls for sound advice and skilled representation, contact us today to arrange a free  consultation with an attorney.
                      </p><a class="link link-group link-group-animated link-bold link-white" href="#"><span>Free Consultation</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <p class="h7">Recent Posts</p>
                          <article class="post post-preview post-preview-inverse"><a href="#">
                              <div class="unit unit-horizontal unit-spacing-lg">
                                <div class="unit-left">
                                  <figure class="post-image"><img src="{{asset('frontend')}}/assets/images/post-2.jpg" alt="" width="70" height="70"/>
                                  </figure>
                                </div>
                                <div class="unit-body">
                                  <div class="post-header">
                                    <p>Help Us Make the Law Accessible for Everyone</p>
                                  </div>
                                  <div class="post-meta">
                                    <ul class="list-meta">
                                      <li>
                                        <time datetime="2019-06-23">June 23, 2019 </time>
                                      </li>
                                      <li>3 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                              </div></a></article>
                          <article class="post post-preview post-preview-inverse"><a href="#">
                              <div class="unit unit-horizontal unit-spacing-lg">
                                <div class="unit-left">
                                  <figure class="post-image"><img src="{{asset('frontend')}}/assets/images/post.jpg" alt="" width="70" height="70"/>
                                  </figure>
                                </div>
                                <div class="unit-body">
                                  <div class="post-header">
                                    <p>Legal Documents Every Landlord Needs </p>
                                  </div>
                                  <div class="post-meta">
                                    <ul class="list-meta">
                                      <li>
                                        <time datetime="2019-06-23">June 20, 2019</time>
                                      </li>
                                      <li>3 Comments</li>
                                    </ul>
                                  </div>
                                </div>
                              </div></a></article>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <p class="h7">Quick links</p>
                    <div class="row" style="max-width: 270px;">
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><a href="">Home</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Careers</a></li>
                          <li><a href="#">Blog</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><a href="">About us</a></li>
                          <li><a href="">Contacts</a></li>
                          <li><a href="#">Appointment</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <p class="h7">Contact us</p>
                    <address class="contact-info text-left">
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray material-icons-phone"></span></div>
                        <div class="unit-body"><a class="link-white" href="tel:#">+123 234 984 47 45</a></div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray fa fa-envelope-o"></span></div>
                        <div class="unit-body"><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-md">
                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray material-icons-place"></span></div>
                        <div class="unit-body"><a class="link-white d-inline" href="#">6036 Richmond hwy,<br>Alexandria, VA USA 22303</a></div>
                      </div>
                    </address>
                    <div class="row row-15 flex-md-row-reverse justify-content-md-between align-items-md-center">
                        
                        <div class="group-sm group-middle">
                          <p class="font-italic text-white">Follow Us:</p>
                          <ul class="list-inline list-inline-reset">
                            <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook" href="#"></a></li>
                            <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-twitter" href="#"></a></li>
                            <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-google-plus" href="#"></a></li>
                          </ul>
                        </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </footer>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('frontend')}}/assets/js/core.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/script.js"></script>
  </body>
</html>