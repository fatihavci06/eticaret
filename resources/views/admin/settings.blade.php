@extends('layouts.back.master')

 @section('title')
            Ayarlar | Fatih
@endsection
 @section('sayfa')Ayarlar @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ayarlar</h3>

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
         <form action="{{route('admin_settings_update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Title</label>
                          <input type="text" name="title" class="form-control" value="{{$data->title}}" >
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Keywords</label>
                        <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" >
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea id="summernote"name="description"  name="editordata">{{$data->description}}</textarea>
                    </div>
                    
                  </div>
                  <div class="row">
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">Company</label>
                        <input type="text" name="company" class="form-control" value="{{$data->company}}" >
                      </div>
                       <div class="col-lg-6">
                        <label for="exampleInputPassword1">Adres</label>
                        <input type="text" name="address" class="form-control" value="{{$data->address}}">
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                      </div>
                      <div class="col-lg-6">
                        <label for="exampleInputPassword1">Fax</label>
                        <input type="text" name="fax" class="form-control" value="{{$data->fax}}">
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" name="email" class="form-control" value="{{$data->email}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Smtp Server</label>
                      <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Smtp Email</label>
                      <input type="text" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Smtp Password</label>
                      <input type="text" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Smtp Email</label>
                      <input type="text" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Smtp Password</label>
                      <input type="text" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Set Pport</label>
                      <input type="number" name="setpport" class="form-control" value="{{$data->setpport}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Facebook</label>
                      <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Instagram</label>
                      <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Youtube</label>
                      <input type="text" name="youtube" class="form-control" value="{{$data->youtube}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Twitter</label>
                      <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
                    </div>
                    <div class="col-lg-6">
                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                          <option value="True" @if($data->status=='True') selected="selected" @endif >True</option>
                          <option value="False" @if($data->status=='False') selected="selected" @endif >False</option>
                        </select>
                   </div>
                    
                    
                  
                    
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">Contact</label>
                      <textarea id="summernote3"name="contact"  name="editordata">{{$data->contact}}</textarea>
                    </div>
                    <div class="col-lg-6">
                      <label for="exampleInputPassword1">References</label>
                      <textarea id="summernote4"name="references"  name="editordata">{{$data->references}}</textarea>
                    </div>
                </div>
                
                  <div class="row">
                    
                  <div class="col-lg-6">
                      <label for="exampleInputPassword1">AbautUs</label>
                      <textarea id="summernote2"name="aboutus"  name="editordata">{{$data->aboutus}}</textarea>
                    </div>
                     <div class="col-lg-6">
                      
                      <input type="hidden" name="id" value="{{$data->id}}">
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