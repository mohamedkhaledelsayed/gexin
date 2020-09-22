@extends('backend.layouts.admin')
@section('title', 'Page Title')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #b78306;">
                <h3 class="card-title" >usagepolicy</h3>
              </div>

  <form method="post" action="{{ route('usagepolicypage.store') }}" enctype="multipart/form-data" >
  {!! csrf_field() !!}
  <div class="card-body">
                  <div class="form-group">
             <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">
            <label>Title :</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}" >
            @if ($errors->has('title'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
        <div class="form-group has-feedback col-xs-6 col-md-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : '' }}">
            <label>Description :</label>
            <textarea name="description" id="contant" rows="5" cols="50" style="width:60%" value="{{old('description')}}"></textarea>            
            @if ($errors->has('description'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        </div>
        <div class="form-group">
        <div class="form-group has-feedback col-xs-4 col-md-4 col-lg-4 {{ $errors->has('image') ? 'has-error' : '' }}"">

          <label style="font-weight: 800" >Banner Image: </label>


          @if($usagepolicy && !$usagepolicy->image)
              <img src="uploads/usagepolicy/{{ $usagepolicy->image }}" class="img-thumbnail img-upload" id="blah" style="width: 280px">
          @else
              <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blah">
          @endif
          <br><br>
          <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                    Upload Image<input type="file" class="imgInp btn-file" name="image" id="imgInp" value="{{old('image')}}">
                </span>
            </span>
          </div>

          @if($errors->has("image"))
              <div class="invalid-feedback">
                  {{$errors->first("image")}}
              </div>
          @endif

          </div>
        </div>

    </div>

    <div class="card-footer">
      <div class="row">
        <div class="col-sm-8">
          <button type="submit" class="btn-primary btn" >save</button>
        </div>
      </div>
    </div>

  </div>
  </form>

  </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script>
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
              }
            }

            $("#imgInp").change(function() {
              readURL(this);
            });
            </script>
@endsection

