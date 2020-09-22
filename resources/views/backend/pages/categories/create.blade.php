@extends('backend.layouts.admin') @section('title', 'Page Title') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header" style="background-color: #b78306;">
                    <h3 class="card-title">Categories</h3>
                </div>

                <form method="post" action="{{ route('categoriespage.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">
                                <label>Title :</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"> @if ($errors->has('title'))
                                <span class="alert alert-danger">
                    <strong>{{ $errors->first('title') }}</strong>
                </span> @endif
                            </div>
                            <div class="form-group">
                                <div class="form-group has-feedback col-xs-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">

                                    <label>Designs : </label>
                                    <select name="designs" class="form-control">
                                        <option value="1">design 1</option>
                                        <option value="2">design 2</option>
                                        <option value="3">design 3</option>
                                
                                    </select>
                                </div>
                                
                                @if ($errors->has('designs'))
                                            <span class="alert alert-danger">
                                <strong>{{ $errors->first('designs') }}</strong>
                            </span> @endif
                            </div>
                            <div class="form-group">
                            <div class="form-group has-feedback col-xs-6 col-md-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label>Description :</label><br>
                                <textarea name="description" rows="5" cols="50" style="width:60%" value="{{old('description')}}"></textarea> 
                                @if ($errors->has('description'))
                                <span class="alert alert-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span> 
                                @endif
                            </div>
                           
                        </div>

                        </div>
                        <div class="form-group" style="margin-left:5px; ">
                            <label>ShowaBoveHome : </label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="1"  {{ old('showabovehome') == '1' ? 'checked' : '' }} id="customRadio1" name="showabovehome">
                                <label for="customRadio1" class="custom-control-label">Displayed on aBove the home page</label>
                            </div>


                        </div>
                        <div class="form-group" style="margin-left:5px; ">
                            <label>statusshowhome : </label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="1" {{ old('statusshowhome') == '1' ? 'checked' : '' }} id="customRadio3"  onclick = "gfg_Run()" name="statusshowhome">
                                <label for="customRadio3" class="custom-control-label">Displayed on the home page</label>
                            </div>


                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-3">
                                    <label style="font-weight: 800 ">category homeimage	:  Size(400*226)</label> @if($category && !$category->iconimage)
                                    <img src="uploads/category/{{ ($category->homeimage) }}" class="img-thumbnail img-upload" id="blah" style="width: 280px"> @else
                                    <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blah"> @endif
                                    <br><br>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                                              Upload Image<input type="file" class="imgInp btn-file" name="homeimage" id="imgInp" value="{{ old('image') }}">
                                          </span>
                                        </span>
                                    </div>

                                    @if($errors->has("homeimage"))
                                    <div class="alert alert-danger">
                                        {{$errors->first("homeimage")}}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-3">
                                    <label style="font-weight: 800 ">category iconimage: Size(70*68) </label> @if($category && !$category->iconimage)
                                    <img src="uploads/category/{{ ($category->iconimage) }}" class="img-thumbnail img-upload" id="blaho" style="width: 280px"> @else
                                    <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blaho"> @endif
                                    <br><br>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                                              Upload Image<input type="file" class="imgInp btn-file" name="iconimage" id="imgInpo" value="{{ old('iconimage') }}">
                                          </span>
                                        </span>
                                    </div>

                                    @if($errors->has("iconimage"))
                                    <div class="alert alert-danger">
                                        {{$errors->first("iconimage")}}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-3">
                                    <label style="font-weight: 800 ">category coverimage: Size(1200*322)</label> @if($category && !$category->coverimage)
                                    <img src="uploads/category/{{ ($category->sidebarimage) }}" class="img-thumbnail img-upload" id="blahc" style="width: 280px"> @else
                                    <img src="{{asset('images/default-thumbnail.png')}}" class="img-thumbnail img-upload" id="blahc"> @endif
                                    <br><br>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <span class="btn btn-default btn-file" style="background-color: #06A8F0 ;color:#fff;">
                                              Upload Image<input type="file" class="imgInp btn-file" name="coverimage" id="imgInpc" value="{{ old('image') }}">
                                          </span>
                                        </span>
                                    </div>

                                    @if($errors->has("coverimage"))
                                    <div class="alert alert-danger">
                                        {{$errors->first("coverimage")}}
                                    </div>
                                    @endif

                                </div>
                                <div class="col-3">
                                    <label style="font-weight: 800 ">category Bannerimage: Size(1200*322)</label>
                                    @if($category && !$category->bannerimage)
                                    <img src="uploads/category/{{ ($category->bannerimage) }}" class="img-thumbnail img-upload" id="blahB" style="width: 280px"> @else
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
                            </div><br><br>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn-primary btn">save</button>
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

        function readURLblaho(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blaho').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInpo").change(function() {
            readURLblaho(this);
        });

        function readURLblahc(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blahc').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInpc").change(function() {
            readURLblahc(this);
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