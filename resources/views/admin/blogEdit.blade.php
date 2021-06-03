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
                                <h3 class="card-title">Edit Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.blog',$blog->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="userName">Blog Title</label>
                                        <input value="{{$blog->title}}" name="title" type="text" class="form-control" id="userName" placeholder="Enter Blog Title">
                                    </div>

                                    <div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea value="{{$blog->description}}" name="description" type="text" class="form-control" rows="3" placeholder="Enter ...">{{$blog->description}}</textarea>
                                        </div>
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
                                        <input value="{{$blog->image}}" type="file" id="myFile" name="image">
                                        <img src="{{asset($blog->image)}}" alt="" height="50" width="100">
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