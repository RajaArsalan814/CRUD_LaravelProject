@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Create New Student</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <form action="{{route('update',['id'=>$student->id])}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" name="name" required value="{{$student->name}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <textarea name="address" id="" cols="5" rows="2" class="form-control">{{$student->address}}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
