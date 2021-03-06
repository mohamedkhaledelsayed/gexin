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
                  <th>games Title</th>
                  <th>games Images</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
             

                <tr>
                <td>{{$game->id}}</td>
                <td>{{$game->title}}</td>

                <td><img src="../../uploads/games/{{$game->image}}" class="img-thumbnail img-upload" id="blah" style="width: 150px"></td>

                <td>
                  <div style="width: 100px">
                   <a href="{{ route('game.edit',$game->id) }}" class="btn btn-s btn-success"><i class="fa fa-pen"></i></a>
                    @csrf
                   <button class="btn btn-s btn-danger" data-game="{{$game->id}}" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                  </div>
               </td> 
                </tr>
             
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
  {{--  <!-- /.content-wrapper
   <!-- Modal -->
   <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">delete Confrimation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{  route('game.destroy',$games->id) }}" method="post">
               @csrf
               @method('DELETE')
      <div class="modal-body">
          <p>
            Are you sure you want to delete this ?
          </p>
        <input type="hidden" name="game" id="game" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">yes,delete</button>
      </div>
      </form>
    
    </div>
  </div>
</div>
<script>

  $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var game = button.data('game')
      var modal = $(this)
      modal.find('.modal-body #game').val(game);
})
</script>   -->  --}}


@endsection