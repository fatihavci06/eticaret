@extends('layouts.master2')
@section('title','Contact')
		<!--/ End Header -->
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
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
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Get in touch</h4>
									<h3>Write us a message</h3>
								</div>
								<form class="form" >
									@csrf
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" id="#name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" id="#subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" id="#email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="phone" type="text" id="#phone" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="message" id="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<a class="btn btn-primary" id="contactus">Send</a>
											</div>
										</div>
									</div>
								</form>

								<div class="alert alert-success mt-2" id="success" style="display:none;"></div>
								<div class="alert alert-danger mt-2" id="er" style="display:none;"></div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li> {{$setting->phone}} </li>
										
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
										
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>{{$setting->address}}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	
	<!--/ End Map Section -->
	
	<!-- Start Shop Newsletter  -->
	
    @endsection
    @section('js')
<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

     $(document).on('click', '#contactus', function(e) {  

  	

        e.preventDefault();

   
        	var err='';
       		 var name = $('input[name="name"]').val();
              var subject = $('input[name="subject"]').val();
              var email = $('input[name="email"]').val();
              var phone = $('input[name="phone"]').val();
              var message = $("#message").val();;
              console.log(phone);
              console.log(message);
   

        $.ajax({

           type:'POST',

           url:"{{ route('contactus') }}",

           data:{name:name, subject:subject, email:email,phone:phone,message:message},

           success:function(data){
           	console.log(data.errors);
           	if(data.errors){
           		$('#success').hide();
           		$('#er').show();
           		$.each( data.errors, function( key, value ) {
				  err+='<p>'+value+'</p>';

				});
				$('#er').html(err);
           	}
           	else{
           		$('#er').hide();
	           	$('#success').show();
	             $('#success').html(data.success);
             }
           }

        });

  

    });

</script>
     
    @endsection
	<!-- End Shop Newsletter -->
	
	<!-- Start Footer Area -->
	