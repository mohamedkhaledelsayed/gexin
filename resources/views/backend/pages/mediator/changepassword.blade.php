@extends('backend.layouts.admin')
@section('title', 'Page Title')
@section('content')
<style>
#display1 ,#display2, #display3{
    float: right;
    position: relative;
    bottom: 32px;
    right: 8px;

}
</style>
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
                <h3 class="card-title" >Change password</h3>
              </div>
              <div class="card-body">
              

                <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="{{ route('mediatorchangePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>
                                <span type="button" onclick="show()" id="display1"> <i class="fa fa-eye"></i></span>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
                                <span type="button" onclick="show()" id="display2"> <i class="fa fa-eye"></i></span>


                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                <span type="button" onclick="show()" id="display3"> <i class="fa fa-eye"></i></span>

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
          
              </div>
              </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
<script>
    function show() {
  var a = document.getElementById("current-password");
  var b = document.getElementById("display1");
  if (a.type == "password") {
    a.type = "text";

  } else {
    a.type = "password";

  }
  var a = document.getElementById("new-password");
  var b = document.getElementById("display2");
  if (a.type == "password") {
    a.type = "text";

  } else {
    a.type = "password";

  }
  var a = document.getElementById("new-password-confirm");
  var b = document.getElementById("display3");
  if (a.type == "password") {
    a.type = "text";

  } else {
    a.type = "password";

  }
}

</script>
@endsection