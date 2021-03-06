@extends('backend.layouts.admin')
@section('title', 'Page Title')
@section('content')
<style>
.label {
  color: white;
  padding: 8px;
}
.warning {background-color: #fbb715;} /* Orange */
.danger {background-color: #f44336;} /* Red */
</style>
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
          @if (session('message'))
          <div class="alert alert-success">
          {{ session('message') }}
          </div>
          @endif
          @if (session('messagedelete'))
          <div class="alert alert-danger">
          {{ session('messagedelete') }}
          </div>
          @endif
            <div class="card-header">
            <button style="margin-right:10px;background-color: #b78306;border: none;" type="button" class="btn btn-info"><a href="{{url('backend/productpage')}}" style="color:#fff;background-color: #b78306;text-decoration:none" >New Product  <i class="fa fa-plus-circle"></i></a></button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#id</th>
                  <th>product Title</th>
                  <th>product Images</th>
                  <th>BestSeller</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($products->count())    
                @foreach($products as $product)

                <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>

                <td><img src="../../uploads/products/{{$product->image}}" class="img-thumbnail img-upload" id="blah" style="width: 150px"></td>
                <td>
                  @if($product->best_seller == 1)
                  <span class="label warning">BestSeller</span>
                  @else
                  <span class="label danger">UnBestSeller</span>
                  @endif
                </td>
                <td>
                  <div style="width: 100px">
                   <a href="{{ route('product.edit',$product->id) }}" class="btn btn-s btn-success"><i class="fa fa-pen"></i></a>
                    @csrf
                   <button class="btn btn-s btn-danger" data-productid="{{$product->id}}" data-toggle="modal" data-target="#deleteproduct"><i class="fa fa-trash"></i></button>
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
   <!-- Modal -->
   <div class="modal fade" id="deleteproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">delete Confrimation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{  route('product.destroy','test') }}" method="post">
               @csrf
               @method('DELETE')
      <div class="modal-body">
          <p>
            Are you sure you want to delete this ?
          </p>
        <input type="hidden" name="product_id" id="product_id" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">yes,delete</button>
      </div>
      </form>
    
    </div>
  </div>
</div>



@endsection