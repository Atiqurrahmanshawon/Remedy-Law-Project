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
                                <h3 class="card-title">Edit Lawyer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.lawyer',$lawyer->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Lawyer Name</label>
                                        <input value="{{$lawyer->name}}" name="name" type="text" class="form-control" id="lawyerName" placeholder="Enter Lawyer Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="{{$lawyer->email}}" name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input value="{{$lawyer->phone}}" name="phone" type="phone" class="form-control" id="phone" placeholder="Enter Phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input value="{{$lawyer->designation}}" name="designation" type="text" class="form-control" id="lawyerName" placeholder="Enter Designation">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                        </div>
                                        <input value="{{$lawyer->image}}" type="file" id="myFile" name="image">
                                        <img src="{{asset($lawyer->image)}}" alt="" height="50" width="100">

                                    </div>


                                </div>
                                <!-- /.card-body -->

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