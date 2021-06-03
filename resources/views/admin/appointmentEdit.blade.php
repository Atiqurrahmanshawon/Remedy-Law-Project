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
                                <h3 class="card-title">Edit Appointment</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.update.appointment',$appointment->id)}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input value="{{$appointment->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="{{$appointment->email}}" name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input value="{{$appointment->phone}}" name="phone" type="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input value="{{$appointment->date}}" name="date" type="date" class="form-control" id="date" placeholder="Enter Date">
                                    </div>

                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <input value="{{$appointment->time}}" name="time" type="time" class="form-control" id="time" placeholder="Enter Time">
                                    </div>


                                    <div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea value="{{$appointment->description}}" name="description" class="form-control" rows="3" placeholder="Enter ...">{{$appointment->description}}</textarea>
                                        </div>
                                    </div>



                                </div>
                                {{--</div>--}}

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