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
                                <h3 class="card-title">Edit Service</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.service',$service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Service Title</label>
                                        <input value="{{$service->title}}" name="title" type="text" class="form-control" id="service" placeholder="Enter Service Title">
                                    </div>

                                    <div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea value="{{$service->description}}" name="description" class="form-control" rows="3" placeholder="Enter ...">{{$service->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                        </div>
                                        <input value="{{$service->image}}" type="file" id="myFile" name="image">
                                        <img src="{{asset($service->image)}}" alt="" height="50" width="100">
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