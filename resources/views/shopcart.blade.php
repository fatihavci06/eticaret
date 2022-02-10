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
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-center">UNIT PRICE</th>
                                <th class="text-center">QUANTITY</th>
                                <th class="text-center">TOTAL</th> 
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                
                                $total=0;
                             @endphp
                            @foreach($shopcart as $s)
                            <tr>
                                <td class="image" data-title="No">@if($s->product->image)<img src="{{Storage::url($s->product->image)}}" alt="#">@endif</td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$s->product->title}}</a></p>
                                   
                                </td>
                                <td class="price" data-title="Price"><span>{{$s->product->price}} </span></td>
                                
                                <td class="qty" data-title="Qty"><!-- Input Order -->
                                    <form method="post" action="{{route('user_shopcart_update',['id'=>$s->product->id])}}">
                                        @csrf
                                        <input type="number"  min="1" max="{{$s->product->quantity}}" name="quantity" value="{{$s->quantity}}" onchange="this.form.submit()">
                                    </form>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>{{$s->product->price * $s->quantity}}</span></td>
                                <td class="action" data-title="Remove"><a href="{{route('user_shopcart_delete',$s->id)}}" onclick="return confirm('Eminmisiniz')"><i class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            @php

                                $total=$total+$s->product->price * $s->quantity;
                             @endphp
                            @endforeach
                          
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>{{$total}}</span></li>
                                        <li>Shipping<span>Free</span></li>
                                        <li>You Save<span>$20.00</span></li>
                                        <li class="last">You Pay<span>{{$total+20}}</span></li>
                                    </ul>
                                    <div class="button5">
                                        
                                        <form action="{{route('user_order_add')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="total" value="{{$total}}">
                                            <button type="submit" class="btn">Continue shopping</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
    
    @endsection
    <!-- End Shop Newsletter -->
    
    <!-- Start Footer Area -->
    