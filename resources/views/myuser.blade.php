@extends('layouts.master2')
@section('title','My Profile')
		<!--/ End Header -->
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Myuser</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-3">
			
			<ul class="nav flex-column">
				  @include('layouts.solmenu')



			</ul>
		</div>
		<div class="col-lg-9">
			@include('profile.show')
		</div>
	</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	
    @endsection
	<!-- End Shop Newsletter -->
	
	<!-- Start Footer Area -->
	