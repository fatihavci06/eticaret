@extends('layouts.back.master')
 @section('title')
            Ürünler | Fatih
@endsection
@section('sayfa')Ürünler @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ürünler</h3>

          <div class="card-tools">
             <a href="{{route('admin_product_add')}}" class="btn btn-primary">Ürün Ekle</a>
          </div>
        </div>
        
        <div class="card-body">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Title(s)</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th >Image Galery</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $p )
                  <tr>

                    <td>{{$p->id}}</td>
                    <td>{{$p->category_id}} </td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>{{$p->price}}</td>
                    <td>@if($p->image)<img src="{{Storage::url($p->image);}}" height="100px" width="100px" /> @endif</td>
                    <td ><a class="btn btn-success" href="{{route('admin_image_create',['product_id'=>$p->id])}}"  >Ekle</a></td>
                    <td>{{$p->status}}</td>
                    <td><a href="{{route('admin_product_delete',$p->id)}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a></td>
                    <td><a href="{{route('admin_product_show',$p->id)}}"  class="btn btn-primary">Düzenle</a></td>
                  </tr>
                   @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>ID</th>
                    <th>Category</th>
                    <th>Title(s)</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th >Image Galery</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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