@extends('layouts.back.master')
 @section('title')
            Anasayfa
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content mt-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

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
          <table class="table table-striped">
           
            <tbody>

              <tr>
                <th scope="col">ID</th>
                <td scope="row">{{$data->id}}</td>
                
              </tr>
              <tr>
                <th scope="col">SİPARİŞ VEREN</th>
                <td scope="row">{{$data->user->name}}</td>
              </tr>
              <tr>
                <th scope="col">SİPARİŞİ ALACAK</th>
                <td scope="row">{{$data->name}}</td>
              </tr>
              <tr>
                <th scope="col">SİPARİŞ ADDRESS</th>
                <td scope="row">{{$data->address}}</td>
              </tr>
              <tr>
                <th scope="col">SİPARİŞ EMAİL</th>
                <td scope="row">{{$data->email}}</td>
              </tr>
              <tr>
                <th scope="col">TOTAL</th>
                <td scope="row">{{$data->total}}</td>
              </tr>
              <tr>
                <th scope="col">IP</th>
                <td scope="row">{{$data->IP}}</td>
              </tr>
              <tr>
                <th scope="col">CREATED_DATE</th>
                <td scope="row">{{$data->created_at}}</td>
              </tr>
              <tr>
                <th scope="col">UPDATED_DATE</th>
                <td scope="row">{{$data->updated_at}}</td>
              </tr>
              <tr>
                <th scope="col">STATUS</th>
                <td>
                
                   <div class="form-group">
                    <form method="post" action="{{route('admin_order_update',$data->id)}}">
                  @csrf
                    <select class="form-control" name="status">
                      <option value="{{$data->status}}" selected>{{$data->status}}</option>
                      <option value="Accepted">Accepted</option>
                      <option value="Canceled">Canceled</option>
                      <option value="Shipping">Shipping</option>
                      <option value="Completed">Completed</option>
                      <option value="New">New</option>
                    </select>
                  </div>
                
               </td>
              </tr>
              <tr>
                <th scope="col">ADMİN NOTE</th>
                <td scope="row"> <textarea class="form-control" name="note" rows="3">{{$data->note}}</textarea></td>
              
              </tr>
              <tr>
                <th scope="col"></th>
                <td scope="row"><button type="submit" class="btn btn-primary">Update</button></td>
              </tr>
              </form>
              <tr>
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
              </tr>

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                              <th>img</th>
                                <th>product</th>
                                <th>price</th>
                                <th class="text-center">quantity</th>
                                <th class="text-center">total</th>
                                <th class="text-center">status</th> 
                                <th class="text-center">note</th> 
                                <th class="text-center">actions</th> 
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($datalist as $d)
                            <tr>
                                <td><img src="{{Storage::url($d->product->image)}}" height="30px" width="30px" /></td>
                                <td class="product-des" data-title="Description">

                                   {{$d->product->title}}
                                   
                                </td>
                                <td class="price" data-title="Price"><span>{{$d->price}} </span></td>
                                
                                <td class="qty" data-title="Qty"><!-- Input Order -->
                                    
                                    {{$d->quantity}}
                                </td>
                                
                                <td class="total-amount" data-title="Total"><span>{{$d->amount}}</span></td>
                                 <form method="post" action="{{route('admin_orderitem_update',$d->id)}}">
                                  @csrf
                                <td><select class="form-control" name="status">
                                  <option value="{{$d->status}}" selected>{{$d->status}}</option>
                                  <option value="Accepted">Accepted</option>
                                  <option value="Canceled">Canceled</option>
                                  <option value="Shipping">Shipping</option>
                                  <option value="Completed">Completed</option>
                                  <option value="New">New</option>
                                </select></td>
                                <td><textarea name="note">{{$d->note}}</textarea></td>
                                <td><button class="btn btn-primary">Save</button></td>
                              </form>
                               
                            </tr>
                            
                            @endforeach
                          
                        </tbody>
                    </table>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  @endsection