@extends('backend.layouts.admin')
@section('title', 'Page Title')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid --> 
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#id</th>
                  <th>blogdetails Title</th>
                  <th>blogdetails Images</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($blogdetails->count())    
                @foreach($blogdetails as $blogdetail)

                <tr>
                <td>{{$blogdetail->id}}</td>
                <td>{{$blogdetail->title}}</td>
                <td><img src="../uploads/blogdetails/{{$blogdetail->image}}" class="img-thumbnail img-upload" id="blah" style="width: 150px"></td>

                <td>
                  <div style="width: 100px">
                   <a href="{{ route('blogdetails.edit',$blogdetail->id) }}" class="btn btn-s btn-success"><i class="fa fa-pen"></i></a>
                    @csrf
                   <button class="btn btn-s btn-danger" data-blogdetails="{{$blogdetail->id}}" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                  </div>
               </td> 
                </tr>
                @endforeach
                @endif
                </tbody>
              
              </table>
      

     
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 


@endsection