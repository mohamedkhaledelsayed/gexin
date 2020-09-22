 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

   

    <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
     
     <button style="margin-right:10px;background-color: #b78306;border: none;" type="button" class="btn btn-info"><a href="{{route('admin.logout')}}" style="color:#fff;background-color: #b78306;text-decoration:none" >logOut  <i class="fas fa-sign-out-alt"></i></a></button>

     <button style="margin-right:10px;background-color: #b78306;border: none;" type="button" class="btn btn-info"><a href="{{route('changePasswordForm')}}" style="color:#fff;text-decoration:none" >Change password  <i class="fas fa-user"></i></a></button>

 
   
</ul>
  </nav>
  <!-- /.navbar -->

  @include('backend.includes.sidebar')
