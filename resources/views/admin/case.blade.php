@extends('admin.index')


@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Case Study</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.form.case')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="case_name">Case Name</label>
                    <input name="case_name" type="text" class="form-control" id="caseName" placeholder="Enter Case Name">
                  </div>

                  <div class="form-group">
                    <label for="lawyer_name">Lawyer Name</label>
                    <input name="lawyer_name" type="text" class="form-control" id="lawyerName" placeholder="Enter Lawyer Name">
                  </div>

                  <div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>

                  <div class="form-group">
                    <label for="date">Date</label>
                    <input name="date" type="date" class="form-control" id="date" placeholder="Enter Date">
                  </div>



                  <div class="form-group">
                    <label for="client_type">Client Type</label>
                    <select name="client_type" class="form-control select2" style="width: 100%;">
                    <option value="Employer" selected="selected">Employer</option>
                    <option value="Business">Business</option>
                    <option value="People">People</option>
                    <option value="Sponsor">Sponsor</option>
                    <option value="Attorney">Attorney</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      {{--<div class="custom-file">--}}
                        {{--<input type="file" class="custom-file-input" id="exampleInputFile">--}}
                        {{--<label class="custom-file-label" for="exampleInputFile">Upload Image</label>--}}
                      {{--</div>--}}
                      {{--<div class="input-group-append">--}}
                        {{--<span class="input-group-text">Upload</span>--}}
                      {{--</div>--}}
                    </div>
                    <input type="file" id="myFile" name="image">
                  </div>

                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
@endsection