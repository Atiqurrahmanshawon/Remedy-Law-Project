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
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.category',$category->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="userName">Category Name</label>
                                        <input value="{{$category->name}}" name="name" type="text" class="form-control" id="userName" placeholder="Enter Category Name">
                                    </div>

                                    <div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea value="{{$category->description}}" name="description" class="form-control" rows="3" placeholder="Enter ...">{{$category->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                        </div>
                                        <input value="{{$category->image}}" type="file" id="myFile" name="image">
                                        <img src="{{asset($category->image)}}" alt="" height="50" width="100">
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