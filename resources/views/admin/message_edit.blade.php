@extends('layouts.back.master')
 @section('title')
            Mesaj Detay
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mesaj Detay</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         <div class="row">
           <div class="col-lg-12">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">{{$message->name}}</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Subject</th>
                  <td>{{$message->subject}}</td>
                  
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td>{{$message->email}}</td>
                  
                </tr>
                <tr>
                  <th scope="row">Phone</th>
                  <td>{{$message->phone}}</td>
                </tr>
                <tr>
                  <th scope="row">Message</th>
                  <td>{{$message->message}}</td>
                </tr>
                <tr>
                  <th scope="row">Admin note</th>
                  <td><form action="{{route('admin_message_update',$message->id)}}" method="post">@csrf<textarea id="summernote" name="note"  name="editordata">{{$message->note}}</textarea></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td><button type="submit" class="form-control btn btn-primary">Kaydet</button></form></td>
                </tr>
              </tbody>
            </table>
           </div>
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