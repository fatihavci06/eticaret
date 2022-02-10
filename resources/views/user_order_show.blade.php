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
                                <th>product</th>
                                <th>price</th>
                                <th class="text-center">quantity</th>
                                <th class="text-center">total</th>
                                <th class="text-center">status</th> 
                                <th class="text-center">note</th> 
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $d)
                            <tr>
                                
                                <td class="product-des" data-title="Description">
                                   {{$d->product->title}}
                                   
                                </td>
                                <td class="price" data-title="Price"><span>{{$d->price}} </span></td>
                                
                                <td class="qty" data-title="Qty"><!-- Input Order -->
                                    
                                    {{$d->quantity}}
                                </td>
                                
                                <td class="total-amount" data-title="Total"><span>{{$d->amount}}</span></td>
                                <td>{{$d->status}}</td>
                                <td>{{$d->note}}</td>
                               
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
    