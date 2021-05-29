@extends('master')

@section('title')
Make an Appointment
@endsection

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/appointment-cover.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Appointment</h2>
          </div>
        </div>
      </section>

      <section class="section section-60 section-md-top-90 section-md-bottom-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-xl-7">
              <h3>Make an Appointment</h3>
              <form class="rd-mailform form-modern" data-form-output="form-output-global" data-form-type="order" method="post" action="bat/rd-mailform.php">
                <div class="row row-seven row-30">
                  <div class="col-md-3">
                    <div class="form-wrap">
                      <input class="form-input" id="appointment-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="appointment-name">Name</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-wrap">
                      <input class="form-input" id="appointment-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="appointment-email">Email</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="appointment-date" type="text" name="date" data-constraints="@Required" data-time-picker="date"> -->
                      <input type="date" name="bday" max="3000-12-31" 
                                        min="1000-01-01" class="form-control">
                      <label class="form-label" for="appointment-date">Date</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-wrap">
                      <input class="form-control timepicker" id="appointment-time" type="text" name="time" data-constraints="@Required" data-time-picker="time">
                      <label class="form-label" for="appointment-time">Time Interval</label>
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="form-wrap">
                      <div class="textarea-lined-wrap">
                        <textarea class="form-input" id="appointment-message" name="message" data-constraints="@Required"></textarea>
                        <label class="form-label" for="appointment-message">Message</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="row row-seven row-15">
                      <div class="col-4 col-md-5">
                        <button class="button button-primary button-block" type="submit">Send</button>
                      </div>
                      <div class="col-3 col-md-2">
                        <button class="button button-silver-outline button-block" type="reset">Reset</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <script>
          $('#input_starttime').pickatime({
            // 12 or 24 hour
            twelvehour: true,
            });
      </script>
@endsection