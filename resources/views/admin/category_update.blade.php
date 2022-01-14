@extends('layouts.back.master')

 @section('title')
            Kategori Düzenle | Fatih
@endsection
 @section('sayfa')Kategori Düzenle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kategori Düzenle</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body col-lg-6">
          @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
            @if(session('hata'))
                    <div class="alert alert-danger">{{session('hata')}}</div>
           @endif
         <form action="{{route('admin_category_update',$categories_detay->id)}}" method="post">

                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Parent</label>
                    <select class="form-control select2" name="parent_id" style="width: 100%;">
                    
                    <option value="0" >Ana kategori</option>
                    @foreach($categories as $c)
                      <option value="{{$c->id}}" @if($categories_detay->parent_id==$c->id) selected="selected" @endif >{{$c->title}}</option>
                    @endforeach
                    
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$categories_detay->title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keywords</label>
                    <input type="text" name="keywords" class="form-control" value="{{$categories_detay->keywords}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$categories_detay->description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{$categories_detay->slug}}">
                  </div>

                  <div class="form-group">
                    <div class="form-group">
                  <label>Disabled Result </label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    
                    <option value="True" @if($categories_detay->status=='true') selected="selected" @endif>True</option>
                    <option value="False" @if($categories_detay->status=='False') selected="selected" @endif >False</option>
                  </select>
                </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                
              </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  @endsection