@extends('layouts.back.master')
 @section('title')
            Faq | Fatih
@endsection
@section('sayfa')Faq @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Faq</h3>

          <div class="card-tools">
             <a href="{{route('admin_faq_add')}}" class="btn btn-primary">Faq Ekle</a>
          </div>
        </div>
        
        <div class="card-body col-lg-12">
          
          @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
         
          <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>İd</th>
                    <th>Position</th>
                    <th>Question</th>
                    <th>Answer</th>
                    
                    <th>Status</th>
                    <th>Actions</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($faq as $f )
                  <tr>

                    <td>{{$f->id}}</td>
                    
                    <td>{{$f->position}}</td>
                    <td>{{$f->question}}</td>
                    <td>{!!$f->answer!!}</td>
                    <td>{{$f->status}}</td>
                   
                    <td><a href="{{route('admin_faq_delete',$f->id)}}" onclick="return confirm('Eminmisiniz')" class="btn btn-danger">Sil</a>
                      <a href="{{route('admin_faq_show',$f->id)}}"  class="btn btn-primary ml-2">Düzenle</a>
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