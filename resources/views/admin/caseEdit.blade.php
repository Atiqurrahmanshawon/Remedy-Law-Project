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
                                <h3 class="card-title">Update Case Study</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.case',$case->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="case_name">Case Name</label>
                                        <input value="{{$case->case_name}}" name="case_name" type="text" class="form-control" id="caseName" placeholder="Enter Case Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="lawyer_name">Lawyer Name</label>
                                        <input value="{{$case->lawyer_name}}" name="lawyer_name" type="text" class="form-control" id="lawyerName" placeholder="Enter Lawyer Name">
                                    </div>

                                    <div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ...">{{$case->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input value="{{$case->date}}" name="date" type="date" class="form-control" id="date" placeholder="Enter Date">
                                    </div>



                                    <div class="form-group">
                                        <label for="client_type">Client Type</label>
                                        <select name="client_type" class="form-control select2" style="width: 100%;">
                                            {{$case->client_type}}
                                            <option value="Employer" selected="selected">Employer</option>
                                            <option value="Business" >Business</option>
                                            <option value="People">People</option>
                                            <option value="Sponsor">Sponsor</option>
                                            <option value="Attorney">Attorney</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                        </div>
                                        <input value="{{$case->image}}" type="file" id="myFile" name="image">
                                        <img src="{{asset($case->image)}}" alt="" height="50" width="100">
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