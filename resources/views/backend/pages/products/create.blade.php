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
                <h3 class="card-title" >Products</h3>
              </div>

  <form method="post" action="{{ route('productpage.store') }}" enctype="multipart/form-data" >
  {!! csrf_field() !!}
  <div class="card-body">
                  <div class="form-group">
             <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">
            <label>Title :</label>
            <input type="text" name="title" class="form-control"  value="{{ old('title') }}">
            @if ($errors->has('title'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
          </div>
        <div class="form-group">
             <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('link') ? 'has-error' : '' }}">
            <label>Link :</label>
            <input type="text" name="link" class="form-control" value="{{old('link')}}" >
            @if ($errors->has('link'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('link') }}</strong>
                </span>
            @endif
        </div>
        </div>
        <div class="form-group">
             <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('price') ? 'has-error' : '' }}">
            <label>Price :</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}" >
            @if ($errors->has('price'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('discount') ? 'has-error' : '' }}">
            <label>Discount :</label>
            <input type="text" name="discount" class="form-control" value="{{old('discount')}}" >
            @if ($errors->has('discount'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
            @endif
        </div>
        </div>
        <div class="form-group">
              <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">

                  <label>categoryproducts : </label>
                  <select name="category" class="form-control">
                  @foreach($categoryproducts as $categoryproduct)  
                     <option value="{{ $categoryproduct->id }}">{{ $categoryproduct->title }}</option>
                  @endforeach   
                   </select>
            </div>
      </div>
 
        <div class="form-group">
        <div class="form-group has-feedback col-xs-6 col-md-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : '' }}">
            <label>Content Product Page :</label>
            <textarea name="description" id="contant" rows="5" cols="50" style="width:60%" value="{{old('description')}}">{{old('description')}}</textarea>            
            @if ($errors->has('description'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        </div>
        <div class="form-group">
          <div class="row">
        <div class="form-group has-feedback col-xs-4 col-md-4 col-lg-4 {{ $errors->has('image') ? 'has-error' : '' }}"">

          <label style="font-weight: 800" >product Image: </label>


          @if($product && !$product->image)
              <img src="uploads/slider/{{ ($product->image) }}" class="img-thumbnail img-upload" id="blah" style="width: 280px">
          @else
              <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blah">
          @endif
          <br><br>
          <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                    Upload Image<input type="file" class="imgInp btn-file" name="image" id="imgInp" value="{{ old('image') }}">
                </span>
            </span>
          </div>

          @if($errors->has("image"))
              <div class="invalid-feedback">
                  {{$errors->first("image")}}
              </div>
          @endif

          </div>
          <div class="form-group has-feedback col-xs-4 col-md-4 col-lg-4 {{ $errors->has('bannerimage') ? 'has-error' : '' }}"">

            <label style="font-weight: 800" >Banner Image: </label>


            @if($product && !$product->bannerimage)
              <img src="uploads/games/{{ $product->bannerimage }}" class="img-thumbnail img-upload" id="blahB" style="width: 280px">
            @else
              <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blahB">
            @endif
            <br><br>
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                    Upload Image<input type="file" class="imgInp btn-file" name="bannerimage" id="imgInpB" value="{{ old('bannerimage') }}">
                </span>
            </span>
            </div>

            @if($errors->has("bannerimage"))
              <div class="alert alert-danger">
                  {{$errors->first("bannerimage")}}
              </div>
            @endif



            </div>
          </div>
        </div>
        <div class="form-group" style="margin-left:5px; ">
            <label>Best Seller : </label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="1" {{ old('bestseller') == '1' ? 'checked' : '' }} id="customRadio1" name="bestseller" >
                <label for="customRadio1" class="custom-control-label">Displayed on Best Seller</label>
            </div>
        </div>
        <div class="form-group" style="margin-left:5px; ">
            <label>Show Home Page : </label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="1" id="customRadio3" name="showhomepage" {{ old('showhomepage') == '1' ? 'checked' : '' }} >
                <label for="customRadio3" class="custom-control-label">Displayed on Home Page</label>
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
            function readURLblahB(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blahB').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            }

            $("#imgInpB").change(function() {
                readURLblahB(this);
            });
            </script>
           
@endsection

