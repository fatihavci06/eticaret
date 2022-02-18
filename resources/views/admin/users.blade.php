@extends('layouts.back.master')
 @section('title')
            Kullanıcılar | Fatih
@endsection
@section('sayfa')Kullanıcılar @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kullanıcılar</h3>

          <div class="card-tools">
             <a href="{{route('admin_product_add')}}" class="btn btn-primary">Ürün Ekle</a>
          </div>
        </div>
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>İd</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    
                    <th>Address</th>
                    <th>Roles</th>
                  
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($datalist as $d )
                  <tr>

                    <td>{{$d->id}}</td>
                    <td> {{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->address}}</td>
                    <td>@foreach($d->role_user as $dc)
                        {{$dc->roles_name[0]->name}},

                      @endforeach
                    </td>

                    
                   
                    
                    <td><a href="{{route('admin_user_delete',$d->id)}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a>
                      <a href="{{route('admin_user_show',$d->id)}}"  class="btn btn-primary ml-2">Düzenle</a>
                    </td>
                  </tr>
                   @endforeach
                  
                  </tfoot>
                </table>
              </div>
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