@extends('layouts.back.master')
 @section('title')
            Orders | Fatih
@endsection
@section('sayfa')Orders @endsection
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
                    <th>Id</th>
                    <th>Siparişi veren</th>
                    <th>Siparişi alacak</th>
                    <th>Phone</th>
                    
                    <th>Email</th>
                    <th>Adress</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($datalist as $d )
                  <tr>

                    <td>{{$d->id}}</td>
                    <td><a href="{{route('admin_user_show',$d->user->id)}}">{{$d->user->name}}</a></td>
                    <td> {{$d->name}}</td>
                    <td>{{$d->phone}}</td> 
                    <td>{{$d->email}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->total}}</td>
                    <td>{{$d->created_at}}</td>
                    <td>{{$d->status}}</td>
                    
                   
                    <td>
                      <a href="{{route('admin_order_show',$d->id)}}"  class="btn btn-primary ml-2">Show</a>
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