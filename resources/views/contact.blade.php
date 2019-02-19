@extends("layouts.site-master")

<section class="cover text-center">
	@include("site.nav")
	@include("site.hero")
</section>

<!--Team-->
<section id="about" class="team text-center">
	@include("site.bio")
</section>
		
<!--Contact-->
<!-- <section id="contact" class="contact">
	<a name="contact"></a>
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
</section> -->

<div class="container contact-form" style="margin-top:100px">
	<div class="container">
	<form class="contact-form mt-4" method="post" action="{{ route('contactus.store') }}">
			    {{ csrf_field() }}
                <h2 class="pb-4 text-center">Contact Us</h2>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
						<input type="text" class="form-control-custom mb-4" placeholder="Name" value="">
				 @if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				 @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
						<input type="text" class="form-control-custom mb-4" placeholder="Email address" value="">
							 @if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							 @endif
                        </div>
                        <!-- <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *"  />
							@if ($errors->has('subject'))
										<span class="help-block">
											<strong>{{ $errors->first('subject') }}</strong>
										</span>
							 @endif
                        </div> -->
						<textarea class="form-control-custom mb-4" rows="3" placeholder="Your Message"></textarea><br />
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-primary btn-md pill-btn mb-4" value="Send Message" />
							
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
			     @if ($errors->has('message'))
				<span class="help-block">
				<strong>{{ $errors->first('message') }}</strong>
				</span>
			    @endif
                        </div>
                    </div> -->
                </div>
            </form>
	</div>
</div>
