@extends('layouts.back.master')

 @section('title')
            Kullanıcı Düzenle | Fatih
@endsection
 @section('sayfa')Kullanıcı Düzenle @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kullanıcı Düzenle</h3>

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
         <form action="{{route('admin_user_update',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputPassword1">Name</label>
                          <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                        </div>
                        
                        <div class="col-lg-6">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="text" name="email" class="form-control" value="{{$user->email}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" name="phone" class="form-control" value="{{$user->phone}}" >
                        </div>
                        
                        <div class="col-lg-6">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" name="address" class="form-control" value="{{$user->address}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputPassword1">Image</label>
                          <input type="file" name="image" class="form-control"  >

                        </div>
                        
                        <div class="col-lg-6">
                          <img src="{{$user->profile_photo_url}}" style="width:100px;height: 120px;">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        
                        <select name="role[]" class="form-select form-control" size="3" aria-label="size 3 select example" multiple>
                          
                          @foreach($roles as $r)
                           
                        
                            <option value="{{$r->id}}" @foreach($role_user as $role) @if($role->role_id==$r->id) selected @endif @endforeach  >{{$r->name}}</option>
                          

                         @endforeach
                          
                          
                        </select>
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