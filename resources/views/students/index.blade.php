@extends('layouts.master')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Students</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Students</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4" align="right"><a class="btn btn-primary" href="{{route('create')}}" >Add Student</a></div> <br><br>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($students as $item)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td><a href="{{route('edit',['id'=>$item->id])}}" class="btn btn-primary">Edit</a> &nbsp; <a  href="{{route('delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </section>

<script>
 </script>
@endsection
