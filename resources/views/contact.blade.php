@extends("layouts.site")
@section("content")
<!--Team-->
<section id="about" class="team text-center">
	@include("site.bio")
</section>
		
<!--Contact-->
<section id="contact" class="contact">
	<h2 class="pb-4 text-center">Contact Us</h2>
	<div class="container">
		<div class="row contact-details">
			<div class="col-sm-8 text-center text-md-left mb-4">
				@include("site.contact-us-form")
			</div>
			<div class="col-sm-4 text-center text-md-left">
				@include("site.contact-us-info")
				@include("site.social-media")
			</div>
		</div>
	</div>
</section>
@endsection