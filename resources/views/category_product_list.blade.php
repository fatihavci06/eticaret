
@extends('layouts.master')
@section('title',$setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="row mt-2 mr-5">
            <div class="col-lg-4"></div>
            <div class="col-lg-8 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" style="width:829px;height:305px;" src="{{Storage::url('images/YVXbzmulXtk9TWsIIqiaYKqkPpRW5r7Ri2C90e6b.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" style="width:829px;height:305px;" src="{{Storage::url('images/YVXbzmulXtk9TWsIIqiaYKqkPpRW5r7Ri2C90e6b.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" style="width:829px;height:305px;" src="{{Storage::url('images/YVXbzmulXtk9TWsIIqiaYKqkPpRW5r7Ri2C90e6b.jpg')}}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->
    
    <!-- Start Small Banner  -->
 
    <!-- End Small Banner -->
    
    <!-- Start Product Area -->
    <div class="product-area section" style="margin-top: -50px;" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>@if(Request::segment(4)==''){{Request::segment(3)}} @else {{Request::segment(4)}} @endif</h2>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:-70px">
                    <div class="col-12">
                        <div class="product-info">
                            
                            <div class="tab-content" id="myTabContent">
                                <!-- Start Single Tab -->
                                <div class="tab-pane fade show active" id="man" role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">

                                            @if($anakategori==2)
                                             @foreach($product->child as $pc)
                                                @foreach($pc->products as $p)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{Storage::url($p->image)}}" alt="#">
                                                            <img class="hover-img" src="{{Storage::url($p->image)}}" alt="#">
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <a title="Add to cart" href="#">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">{{$p->title}}</a></h3>
                                                        <div class="product-price">
                                                            <span>{{$p->price}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                    @endforeach
                                                @endforeach
                                            @else
                                            @foreach($product as $p)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{Storage::url($p->image)}}" alt="#">
                                                            <img class="hover-img" src="{{Storage::url($p->image)}}" alt="#">
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <a title="Add to cart" href="#">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">{{$p->title}}</a></h3>
                                                        <div class="product-price">
                                                            <span>{{$p->price}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                <!-- Start Single Tab -->
                                
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Product Area -->
    
    <!-- Start Midium Banner  -->

    <!-- End Midium Banner -->
    
    <!-- Start Most Popular -->
   
    
   
    <!-- End Shop Home List  -->
    
    <!-- Start Shop Blog  -->
   
    <!-- End Shop Blog  -->
    
    <!-- Start Shop Services Area -->

@endsection