@extends('layouts.back.master')
 @section('title')
            Kategoriler | Fatih
@endsection
@section('sayfa')Kategoriler @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kategoriler</h3>

          <div class="card-tools">
             <a href="{{route('admin_category_add')}}" class="btn btn-primary">Kategori Ekle</a>
          </div>
        </div>
        
        <div class="card-body">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>ID</th>
                    <th>Parent</th>
                    <th>Title(s)</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $c )
                  <tr>

                    <td>{{$c->id}}</td>
                    <td>{{$c->parent_id}} </td>
                    <td>{{$c->title}}</td>
                    <td>{{$c->status}}</td>
                    <td><a href="{{route('admin_category_delete',$c->id)}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a></td>
                    <td><a href="{{route('admin_category_show',$c->id)}}"  class="btn btn-primary">Düzenle</a></td>
                  </tr>
                   @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Parent</th>
                    <th>Title(s)</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
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