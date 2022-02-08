@extends('layouts.master2')
@section('title','Faq')
        <!--/ End Header -->
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
  
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
                <div class="col-md-12 accordion_one">
    <div class="panel-group" id="accordionFourLeft" style="margin-top: -50px;">
        @foreach($faq as $f)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeft{{$f->id}}" aria-expanded="false" class="collapsed"> {{$f->question}} </a> </h4>
            </div>
            <div id="collapseFiveLeft{{$f->id}}" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                <div class="panel-body">
                    
                    <div class="text-accordion">
                         {!!$f->answer!!} 
                    </div>
                </div> <!-- end of panel-body -->
            </div>
        </div> <!-- /.panel-default -->
        @endforeach
        
        
    </div>
    <!--end of /.panel-group-->
</div>
            </div>
    </section>
    <!--/ End Contact -->
    
    <!-- Map Section -->
    
    <!--/ End Map Section -->
    
    <!-- Start Shop Newsletter  -->
    
    @endsection
    <!-- End Shop Newsletter -->
    
    <!-- Start Footer Area -->
    