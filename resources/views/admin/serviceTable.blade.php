@extends('admin.index')


@section('content')
<div class="content-wrapper">
     
<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Service</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Service</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->description}}</td>
                            <td><img src="{{asset($data->image)}}" alt="" height="50" width="100"></td>
                            <td>
                                <a href="{{route('admin.service.edit',$data->id)}}" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="{{route('admin.service.delete',$data->id)}}" class="btn btn-danger" role="button">Delete</a></td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.form.service')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Service Title</label>
                            <input name="title" type="text" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required></textarea>
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
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Service</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Service Title</label>
                            <input value="" name="title" type="text" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea value="" name="description" class="form-control" required></textarea>
                        </div>
                        <!-- upload image -->

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
                            <input value="" type="file" id="myFile" name="image">
                        </div>

                </div>

                        <!-- upload image -->

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        {{--<a href ='{{route('admin.service.delete',$data->id)}}'></a>--}}
                        <a href="{{route('admin.service.delete',$data->id)}}" class="btn btn-danger" role="button">Delete</a>
                        {{--<input type="submit" class="btn btn-danger" value="Delete">--}}
                    </div>

            </div>
        </div>
    </div>
</body>

</div>
@endsection