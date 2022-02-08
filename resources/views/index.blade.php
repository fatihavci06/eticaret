
@extends('layouts.master')
@section('title',$setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="row mt-2 ">
            <div class="col-md-4"></div>
            <div class="col-md-8 ">
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
    
    
    <!-- Start Most Popular -->
    <div class="product-area most-popular section" style="margin-top:-40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Daily Item</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:-40px;">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($daily as $d)
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{Storage::url($d->image)}}" alt="#">
                                    <img class="hover-img" src="{{Storage::url($d->image)}}" alt="#">
                                    <span class="out-of-stock">Daily</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <form action="{{route('user_shopcart_store',['id'=>$d->id])}}" method="post">
                                     @csrf
                                    <div class="product-action-2">
                                        <input type="number"  min="1" name="quantity" max="{{$d->quantity}}" name="quantity">
                                        <input type="submit"  class="btn btn-primary" value="Add to cart">
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$d->title}}</a></h3>
                                <div class="product-price">
                                    <span class="old">{{$d->price*3/2}} TL</span>
                                    <span>{{$d->price}} TL</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                       
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area most-popular section" style="margin-top:-170px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Last Item</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:-40px;">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($last as $l)
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{Storage::url($l->image)}}" alt="#">
                                    <img class="hover-img" src="{{Storage::url($l->image)}}" alt="#">
                                    <span class="out-of-stock">Daily</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="{{route('addtocart',['id'=>$l->id])}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$l->title}}</a></h3>
                                <div class="product-price">
                                    <span class="old">{{$l->price*3/2}} TL</span>
                                    <span>{{$l->price}} TL</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                       
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area most-popular section" style="margin-top:-170px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Picked Item</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:-40px;">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($picked as $p)
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{Storage::url($p->image)}}" alt="#">
                                    <img class="hover-img" src="{{Storage::url($p->image)}}" alt="#">
                                    <span class="out-of-stock">Picked</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="{{route('addtocart',['id'=>$p->id])}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$p->title}}</a></h3>
                                <div class="product-price">
                                    <span class="old">{{$p->price*3/2}} TL</span>
                                    <span>{{$p->price}} TL</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                       
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Most Popular Area -->
    
    <section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Eshop Free Lite version</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free<br> lite Version of Eshop.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the template to get all pages,<br> features and commercial license.</p>

                        <div class="button">
                            <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>On sale</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
                                    <p class="price with-discount">$59</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$44</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$89</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Best Seller</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$65</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$33</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$77</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Top viewed</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$35</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    <!-- Start Single List  -->
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="https://via.placeholder.com/115x140" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                                    <p class="price with-discount">$99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Home List  -->
    
    <!-- Start Shop Blog  -->
    <section class="shop-blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July , 2020. Monday</p>
                            <a href="#" class="title">Sed adipiscing ornare.</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July, 2020. Monday</p>
                            <a href="#" class="title">Man’s Fashion Winter Sale</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July, 2020. Monday</p>
                            <a href="#" class="title">Women Fashion Festive</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Blog  -->
    
    <!-- Start Shop Services Area -->
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
    <!-- End Shop Services Area -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection