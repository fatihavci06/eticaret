@extends('layouts.master2')
@section('title','ShopCart')
        <!--/ End Header -->
@section('content')
    <!-- Breadcrumbs -->
   
    <!-- Shopping Cart -->
     @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>id</th>
                                <th>name</th>
                                <th class="text-center">address</th>
                                <th class="text-center">total</th>
                                <th class="text-center">date</th> 
                                <th class="text-center">status</th> 
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $d)
                            <tr>
                                <td class="image" data-title="No">{{$d->id}}</td>
                                <td class="product-des" data-title="Description">
                                    {{$d->name}}
                                   
                                </td>
                                <td class="price" data-title="Price"><span>{{$d->address}} </span></td>
                                
                                <td class="qty" data-title="Qty"><!-- Input Order -->
                                    
                                    {{$d->total}}
                                </td>
                                <td>{{$d->created_at}}</td>
                                <td class="total-amount" data-title="Total"><span>{{$d->status}}</span></td>
                                <td class="action" data-title="Show"><a href="{{route('user_order_show',['id'=>$d->id])}}" class="btn btn-primary">Göster</a></td>
                            </tr>
                            
                            @endforeach
                          
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
    <!-- End Shop Newsletter -->
    
    <!-- Start Footer Area -->
    