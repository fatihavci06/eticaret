@php
    $parentcategories= \App\Http\Controllers\Admin\HomeController::categoryList() 

@endphp
<div class="header-inner ">
            <div class="container">
                <div class="col-lg-12 cat-nav-head show-on-click">
                    <div class="row">
                        <div class="col-lg-3 ">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                                <ul class="main-category">

                                    @foreach($parentcategories as $pc)
                                    <li><a href="{{route('product_list',$pc->slug)}}">{{$pc->title}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        @if(count($pc->child)>0)
                                        <ul class="sub-category">
                                            @foreach($pc->child as $ch)
                                                <li><a href="{{route('product_list',['sl'=>$pc->slug,'slug'=>$ch->slug])}}">{{$ch->title}}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                    
                                        </ul>
                                    
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg ">
                                    <div class="navbar-collapse">   
                                        <div class="nav-inner"> 
                                            <ul class="nav main-menu menu navbar-nav">
                                                    <li ><a href="#">Home</a></li>
                                                    <li><a href="#">Compains</a></li>                                                
                                                    <li><a href="{{route('references')}}">References</a></li>
                                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                                                    <li><a href="{{route('faq')}}">Faq</a></li>                                  
                                                    
                                                   
                                                </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu --> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>