@extends("layouts.site-master")

<section class="cover text-center">
	@include("site.nav")
	@include("site.hero")
</section>
		
<section id="portfolio" class="gallery text-center">
	<div class="container-fluid">
		<a name="gallery"></a>
		<h2 class="mb-4">Our Work</h2>
		
		<!--Gallery Filter-->
		 @include("site.gallery-filter")
	
		<!--Gallery-->
		@include("site.gallery")
	</div>
</section>

<section class="cta text-center">
	<!--CTA-->
	@include("site.call-to-action")
</section>