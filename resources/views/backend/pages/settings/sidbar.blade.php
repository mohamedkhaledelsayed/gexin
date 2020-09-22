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
                <h3 class="card-title" >Setting Sidebar </h3>
              </div>
              <div class="card-body">
                    <form method="POST" action="{{route('setting.update','1')}}">
                       @csrf
                       @method('PUT')
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio1" name="bestsellergame" {{ $setting->BestsellerGame == '1' ? 'checked' : '' }}  >
                            <label for="customRadio1" class="custom-control-label">Show BestSellerGame In Sidebar</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio2" name="bestsellerproduct" {{ $setting->BestsellerProduct == '1' ? 'checked' : '' }}  >
                            <label for="customRadio2" class="custom-control-label">Show BestSellerProduct In Sidebar</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio3" name="lastnews"  {{ $setting->LastNews == '1' ? 'checked' : '' }} >
                            <label for="customRadio3" class="custom-control-label">Show LastNews In Sidebar</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio6" name="categories"  {{ $setting->categories == '1' ? 'checked' : '' }} >
                            <label for="customRadio5" class="custom-control-label">Show categories In Sidebar</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio4" name="categorygame"   {{ $setting->CategoryGame == '1' ? 'checked' : '' }}>
                            <label for="customRadio4" class="custom-control-label">Show CategoryGame In Sidebar</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-left:5px; ">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="1" id="customRadio5" name="categoryproduct"  {{ $setting->CategoryProduct == '1' ? 'checked' : '' }} >
                            <label for="customRadio5" class="custom-control-label">Show CategoryProduct In Sidebar</label>
                        </div>
                    </div>
               
                                    
                    <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-8">
                        <button type="submit" class="btn-primary btn" >save</button>
                        </div>
                    </div>
                    </div>                        
                    </form>
              </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
       
              

@endsection