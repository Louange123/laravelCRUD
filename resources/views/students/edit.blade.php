
@extends('students.layout')
@section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                      
            
            </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{route('students.index') }}">Back</a> 
        </div></div></div>

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>
                                @foreach($errors->all() as $error)

                                <li>{{$error}}</li>@endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('students.update', $student->id) }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>StudentNAme:</strong>

                                        <input type="text" name="studname" value="{{$student->studname}}" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Course</strong>
                                        <input type="text" name="course" class="form-control" value="{{$student->course}}" placeholder="Course">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Fee</strong>
                                        <input type="text" name="fee" class="form-control" placeholder="Fee" value="{{$student->fee}}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        @endsection

                        