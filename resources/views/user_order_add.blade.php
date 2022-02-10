@extends('layouts.master2')
@section('title','ShopCart')
        <!--/ End Header -->
@section('content')
    <!-- Breadcrumbs -->
   
    <!-- Shopping Cart -->
     @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
           @endif
    <section class="shop checkout section">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-8 col-12">
                        <div class="checkout-form">
                            <h2>Make Your Checkout Here</h2>
                            <p>Please register in order to checkout more quickly</p>
                            <!-- Form -->
                            <form class="form" action="{{route('user_order_store')}}"  method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>First Name<span>*</span></label>
                                            <input type="text" name="name" placeholder="" required="required" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Address<span>*</span></label>
                                            <input type="text" name="address" placeholder="" value="{{Auth::user()->address}}" required="required">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Phone Number<span>*</span></label>
                                            <input type="number" name="phone" placeholder="" value="{{Auth::user()->phone}}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" name="email" placeholder="" required="required" value="{{Auth::user()->email}}">
                                            <input type="hidden" name="total" placeholder=""  value="{{$total}}">
                                        </div>
                                    </div>
                                     
                                    
                                </div>
                                <button type="submit" class="btn">Save</button>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="order-details">
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>CART  TOTALS</h2>
                                <div class="content">
                                    <ul>
                                        <li>Sub Total<span>${{$total}}</span></li>
                                        <li>(+) Shipping<span>$10.00</span></li>
                                        <li class="last">Total<span>$340.00</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>Payments</h2>
                                <div class="content">
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label>
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>
                                        <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> PayPal</label>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Payment Method Widget -->
                            <div class="single-widget payement">
                                <div class="content">
                                    <img src="images/payment-method.png" alt="#">
                                </div>
                            </div>
                            <!--/ End Payment Method Widget -->
                            <!-- Button Widget -->
                            <div class="single-widget get-button">
                                <div class="content">
                                    <div class="button">
                                        <a href="#" class="btn">proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="shop checkout section">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-8 col-12">
                        <div class="checkout-form">
                            <h2>Make Your Checkout Here</h2>
                            <p>Card İnfo</p>
                            <!-- Form -->
                            <form class="form" method="post" action="{{route('user_order_store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Card Name<span>*</span></label>
                                            <input type="text" name="cardname" placeholder="" required="required" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Card Number<span>*</span></label>
                                            <input type="number" name="cardnumber" placeholder="" required="required">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Dates<span>*</span></label>
                                            <input type="text" name="dates" placeholder=""  required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email Address<span>*</span></label>
                                            <input type="secretnumber" name="secretnumber" placeholder="" required="required" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                           <button type="submit" class="btn">Save</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!--/ End Checkout -->
        
        <!-- Start Shop Services Area  -->
        <section class="shop-services section home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Free shiping</h4>
                            <p>Orders over $100</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Free Return</h4>
                            <p>Within 30 days returns</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Sucure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Best Peice</h4>
                            <p>Guaranteed price</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
    
    @endsection
    <!-- End Shop Newsletter -->
    
    <!-- Start Footer Area -->
    