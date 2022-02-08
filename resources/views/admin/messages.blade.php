@extends('layouts.back.master')
 @section('title')
            Mesajlar | Fatih
@endsection
@section('sayfa')Mesajlar @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mesajlar</h3>

          @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
          @endif
        </div>
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Admin Note</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($messages as $m )
                  <tr>

                   
                    <td>{{$m->name}}</td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->phone}}</td>
                    <td>{{$m->subject}}</td>
                    <td>{{$m->message}}</td>
                    <td>{!!$m->note!!}</td>
                    <td>{{$m->status}}</td>
                    <td><a href="{{route('admin_message_delete',$m->id)}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a>
                      <a href="{{route('admin_message_edit',$m->id)}}"  class="btn btn-primary ml-2">Düzenle</a>
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