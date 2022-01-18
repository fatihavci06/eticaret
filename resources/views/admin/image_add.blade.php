@extends('layouts.back.master')

 @section('title')
            Resim Ekle | Fatih
@endsection
 @section('sayfa')Resim Ekle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$data->title}}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body col-lg-12">
          @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
            @if(session('hata'))
                    <div class="alert alert-danger">{{session('hata')}}</div>
           @endif
           @if($errors->any()) 
            <div class="alert alert-danger">
              @foreach($errors->all() as $e)
                        <li>{{$e}}</li>
                        @endforeach
            </div>
                        
            @endif
         <form action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                      
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" name="title"  value="{{old('title')}}"class="form-control" >
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">İmage</label>
                        <input type="file" name="image" class="form-control" >
                      </div>
                  </div>

                  
                  
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12 ">
                      <button type="submit" class="form-control btn btn-primary">Kaydet</button>
                    </div>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                
              </form>
        
        <!-- /.card-body -->

        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>ID</th> 
                    <th>Title(s)</th>
                    <th>Image</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($images as $c )
                  <tr>

                    <td>{{$c->id}}</td>
                    <td>{{$c->title}} </td>
                    <td><img src="{{Storage::url($c->image);}}" width="100px" height="100px" /></td>
                    <td><a href="{{route('admin_image_delete',['id'=>$c->id,'product_id'=>$data->id])}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a></td>
                    
                  </tr>
                   @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th> 
                    <th>Title(s)</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
            </div>
        <!-- /.card-footer-->
      </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  @endsection